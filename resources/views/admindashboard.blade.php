<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="container">

    <!-- NAV BAR -->
    <nav class="nav">
        <div class="container-fluid">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn-out">Logout</button>
            </form>
        </div>
    </nav>

    <h2>Welcome, Admin</h2>

    <!-- SUCCESS MESSAGE -->
    @if(session('success'))
        <p class="success-msg">{{ session('success') }}</p>
    @endif

    <!-- ADD COURSE CARD -->
    <div class="card mb-4">
        <div class="card-header">
            Add New Course
        </div>

        <div class="card-body">
            <form method="POST" action="/admin/course">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Course Code</label>
                    <input type="text" name="course_code" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Course Title</label>
                    <input type="text" name="course_title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Assign Lecturer</label>
                    <select name="lecturer_id" class="form-select" required>
                        <option disabled selected>-- select Lecturer --</option>

                        @foreach($lecturers as $lecturer)
                            <option value="{{ $lecturer->id }}">
                                {{ $lecturer->name }}
                            </option>
                        @endforeach

                    </select>
                </div>

                <button type="submit" class="btn-success">
                    Add Course
                </button>
            </form>
        </div>
    </div>

    <!-- COURSE LIST -->
    <div class="card">
        <div class="card-header">
            List Of Courses
        </div>

        <div class="card-body">
            <table class="table">
                <thead class="table-secondary">
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Lecturer</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->course_code }}</td>
                        <td>{{ $course->course_title }}</td>
                        <td>{{ $course->lecturer->name ?? 'Not Assigned' }}</td>
                        <td>
                            <form method="POST" action="/admin/course/{{ $course->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>

</body>
</html>