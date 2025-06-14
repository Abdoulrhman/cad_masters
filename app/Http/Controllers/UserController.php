<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends Controller
{
    use AuthorizesRequests; // This enables $this->middleware()

    public function __construct()
    {
        $this->middleware('permission:view users')->only('index');
        $this->middleware('permission:create users')->only(['create', 'store']);
        $this->middleware('permission:edit users')->only(['edit', 'update']);
        $this->middleware('permission:delete users')->only('destroy');
    }


    public function index()
    {
        $users = User::with('roles')->latest()->paginate(10);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        $userData = $request->validated();
        $userData['password'] = bcrypt($userData['password']);

        $user = User::create($userData);

        DB::transaction(function () use ($user, $request) {
            if ($request->role) {
                $user->assignRole($request->role);
            }

            if ($request->has('is_admin')) {
                $user->update(['is_admin' => $request->role === 'admin']);
            }
        });

        return redirect()->route('dashboard.users.index')->with('success', 'User created successfully');
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        if ($user->hasRole('super-admin') && !auth()->user()->hasRole('super-admin')) {
            abort(403, 'Cannot edit super admin');
        }

        DB::transaction(function () use ($user, $request) {
            $user->update($request->validated());

            if ($request->has('role')) {
                $user->syncRoles($request->role);
                $user->update(['is_admin' => $request->role === 'admin']);
            }
        });

        return redirect()->route('dashboard.users.show', $user)
            ->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        if ($user->id === auth()->id()) {
            return redirect()->back()->with('error', 'You cannot delete your own account');
        }

        if ($user->hasRole('super-admin')) {
            return redirect()->back()->with('error', 'Cannot delete super admin');
        }

        $user->delete();

        return redirect()->route('dashboard.users.index')
            ->with('success', 'User deleted successfully');
    }
}
