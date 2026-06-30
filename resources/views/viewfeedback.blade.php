<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Feedback</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<div class="container">

    <!-- PAGE TITLE -->
    <h2>Course Feedback</h2>
    <p class="course-title">
        {{ $course->course_code }} – {{ $course->course_title }}
    </p>

    <!-- NO FEEDBACK MESSAGE -->
    @if($feedbacks->isEmpty())
        <p class="no-feedback">No feedback has been submitted for this course yet.</p>
    @else
        <!-- FEEDBACK LIST -->
        <div class="feedback-list">

            @foreach($feedbacks as $feedback)
                <div class="feedback-card">

                    <div class="feedback-header">
                        <span class="week">
                            Week {{ $feedback->week ?? 'N/A' }}
                        </span>

                        <span class="rating rating-{{ $feedback->rating }}">
                            @switch($feedback->rating)
                                @case(1) Very Poor @break
                                @case(2) Poor @break
                                @case(3) Average @break
                                @case(4) Good @break
                                @case(5) Excellent @break
                                @default Not Rated
                            @endswitch
                        </span>
                    </div>

                    <p class="feedback-message">
                        {{ $feedback->message }}
                    </p>

                    <small class="feedback-date">
                        Submitted on {{ $feedback->created_at->format('d M Y') }}
                    </small>

                </div>
            @endforeach

        </div>
    @endif

    <!-- BACK BUTTON -->
    <a href="{{ url()->previous() }}" class="btn-back">
        Back to Dashboard
    </a>

</div>

</body>
</html>