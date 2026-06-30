<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="container">
    <nav class="nav">
        <button class="btn-out">Logout</button>
    </nav>

    <h2>Welcome, Admin</h2>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <!-- ADD COURSE -->
    <div class="card">
        <h3>Add New Course</h3>

        <form method="POST" action="/admin/course">
            @csrf

            <input type="text" name="course_code" placeholder="Course Code" required>
            <input type="text" name="course_title" placeholder="Course Title" required>

            <select name="lecturer_id" required>
                <option value="">-- Select Lecturer --</option>
                @foreach($lecturers as $lecturer)
                    <option value="{{ $lecturer->id }}">
                        {{ $lecturer->name }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="btn-success">Add Course</button>
        </form>
    </div>

    <!-- COURSE LIST -->
    <div class="card">
        <h3>List of Courses</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Title</th>
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
                        <form method="POST" action="{{ route('admin.course.delete', $course->id) }}">
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

</body>
</html>