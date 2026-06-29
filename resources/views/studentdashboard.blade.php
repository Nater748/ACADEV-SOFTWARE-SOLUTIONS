<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="container">

    <!-- NAV BAR -->
    <nav class="nav">
        <div class="container-fluid">
            <button class="btn-out">Logout</button>
        </div>
    </nav>

    <h2>Welcome, Student</h2>
    <p>Select a course to give feedback</p>

    <!-- SUCCESS MESSAGE -->
    @if(session('success'))
        <p class="success-msg">{{ session('success') }}</p>
    @endif

    <!-- COURSE LIST -->
    <div class="course-list">
        @forelse($courses as $course)
            <a href="#feedback-{{ $course->id }}">
                {{ $course->course_code }}
            </a>
        @empty
            <p>No courses available.</p>
        @endforelse
    </div>

    <!-- FEEDBACK FORMS -->
    @foreach($courses as $course)
        <div id="feedback-{{ $course->id }}" class="card mt-4">
            <div class="card-header">
                Feedback for {{ $course->course_code }} - {{ $course->course_title }}
            </div>

            <div class="card-body">
                <form method="POST" action="/student/feedback">
                    @csrf

                    <input type="hidden" name="course_id" value="{{ $course->id }}">

                    <div class="mb-3">
                        <label class="form-label">Week</label>
                        <input type="number" name="week" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Feedback</label>
                        <textarea name="message" class="form-control" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn-success">
                        Submit Feedback
                    </button>
                </form>
            </div>
        </div>
    @endforeach

</div>

</body>
</html>