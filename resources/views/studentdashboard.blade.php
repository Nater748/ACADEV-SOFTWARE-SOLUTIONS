<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="container">

    <!-- NAV BAR -->
    <nav class="nav">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-out">Logout</button>
        </form>
    </nav>

    <h2>Welcome, Student</h2>
    <p>Select a course to give feedback</p>

    @if(session('success'))
        <p class="success-msg">{{ session('success') }}</p>
    @endif

    <!-- COURSE LIST -->
    <div class="course-list">
        @forelse($courses as $course)
            <div class="course-item">
                <span>
                    {{ $course->course_code }} – {{ $course->course_title }}
                </span>

                <a href="{{ route('student.feedback.form', $course->id) }}"
                   class="btn-view">
                    Give Feedback
                </a>
            </div>
        @empty
            <p>No courses available.</p>
        @endforelse
    </div>

</div>

</body>
</html>