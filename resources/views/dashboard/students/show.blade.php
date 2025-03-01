@extends('layouts.dashboard')

@section('content')
<main class="tp-dashboard-body-bg">
    <section class="tpd-main pb-75 pt-75">
        <div class="container">
            <h2 class="mb-4 text-center">{{ $student->name }}</h2>

            <table class="table table-bordered">
                <tr>
                    <th>Name:</th>
                    <td>{{ $student->name }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ $student->email }}</td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>{{ $student->phone ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Date of Birth:</th>
                    <td>{{ $student->dob ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td>{{ ucfirst($student->gender) ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Profile Image:</th>
                    <td>
                        @if ($student->image)
                        <img src="{{ asset('storage/' . $student->image) }}" class="img-thumbnail" width="150">
                        @else
                        No image available
                        @endif
                    </td>
                </tr>
            </table>

            <div class="d-flex gap-2">
                <a href="{{ route('dashboard.students.edit', $student->id) }}" class="btn btn-warning">Edit</a>

                <form action="{{ route('dashboard.students.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete this student?')">
                        Delete
                    </button>
                </form>
            </div>

            <div class="mt-4">
                <a href="{{ route('dashboard.students.index') }}" class="btn btn-secondary">Back to Students</a>
            </div>
        </div>
    </section>
</main>
@endsection
