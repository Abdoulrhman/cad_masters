<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Assign admin role to existing admin users
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        User::where('is_admin', true)->each(function ($user) use ($adminRole) {
            $user->assignRole($adminRole);
        });
    }

    public function down()
    {
        // Optional: Remove admin roles (but keep is_admin values)
        $adminRole = Role::where('name', 'admin')->first();
        if ($adminRole) {
            DB::table('model_has_roles')->where('role_id', $adminRole->id)->delete();
        }
    }
};
