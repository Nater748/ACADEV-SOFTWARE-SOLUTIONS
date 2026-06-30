<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    // Show student dashboard
    public function dashboard()
    {
        $courses = Course::all();
        return view('studentdashboard', compact('courses'));
    }

    // Show feedback form for a course
    public function showFeedbackForm($courseId)
    {
        $course = Course::findOrFail($courseId);
        return view('submitfeedback', compact('course'));
    }

    // Handle feedback submission
    public function submitFeedback(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'rating'    => 'required|integer|min:1|max:5',
            'message'   => 'required|string'
        ]);

        Feedback::create([
            'course_id'  => $request->course_id,
            'student_id' => Auth::id(), // authenticated student
            'rating'     => $request->rating,
            'message'    => $request->message
        ]);

        return redirect()
            ->route('student.dashboard')
            ->with('success', 'Feedback submitted successfully');
    }
}