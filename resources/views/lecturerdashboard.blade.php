<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="container">

    <!-- Nav Bar -->
    <nav class="nav">
        <div class="container-fluid">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-out">Logout</button>
            </form>
        </div>
    </nav>

    <h2>Welcome, {{ auth()->user()->name }}</h2>

    <!-- Courses Section -->
    <div class="courses-box">
        <h3>Your Courses</h3>

        @if($courses->count() > 0)
            <table class="course-table">
                <thead>
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{ $course->course_code }}</td>
                            <td>{{ $course->course_title }}</td>
                            <td>
                                <a href="{{ route('lecturer.feedback', $course->id) }}"
                                   class="btn-view">
                                    View Feedback
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No courses assigned to you yet.</p>
        @endif
    </div>

</div>

</body>
</html>