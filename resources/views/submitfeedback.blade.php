<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give Feedback</title>
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

    <h2>
        Feedback for {{ $course->course_code }} – {{ $course->course_title }}
    </h2>

    <!-- ERROR MESSAGE -->
    @if($errors->any())
        <div class="error-msg">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- FEEDBACK FORM -->
    <form method="POST" action="{{ route('student.feedback.submit') }}" class="feedback-form">
        @csrf

        <input type="hidden" name="course_id" value="{{ $course->id }}">

        <!-- RATING -->
        <div class="form-group">
            <label for="rating">Rating</label>
            <select name="rating" id="rating" required>
                <option value="">-- Select Rating --</option>
                <option value="1">Very Poor</option>
                <option value="2">Poor</option>
                <option value="3">Average</option>
                <option value="4">Good</option>
                <option value="5">Excellent</option>
            </select>
        </div>

        <!-- MESSAGE -->
        <div class="form-group">
            <label for="message">Feedback</label>
            <textarea
                name="message"
                id="message"
                rows="5"
                placeholder="Write your feedback here..."
                required
            ></textarea>
        </div>

        <button type="submit" class="btn-success">
            Submit Feedback
        </button>
    </form>

</div>

</body>
</html>