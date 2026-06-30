<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function dashboard()
    {
        $lecturer = Auth::user();

        $courses = Course::where('lecturer_id', $lecturer->id)->get();

        return view('lecturerdashboard', compact('courses'));
    }
    public function viewFeedback($courseId)
    {
        // Get the course
        $course = Course::findOrFail($courseId);

        // Get feedbacks for this course
        $feedbacks = Feedback::where('course_id', $courseId)
                            ->orderBy('created_at', 'desc')
                            ->get();

        return view('viewfeedback', compact('course', 'feedbacks'));
    }
}
