<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Feedback;

class StudentController extends Controller
{
    public function dashboard()
    {
        $courses = Course::all();
        return view('student.dashboard', compact('courses'));
    }

    public function submitFeedback(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'week' => 'required',
            'message' => 'required'
        ]);

        Feedback::create([
            'course_id' => $request->course_id,
            'student_id' => 1, // TEMPORARY (until login)
            'week' => $request->week,
            'message' => $request->message
        ]);

        return back()->with('success', 'Feedback submitted successfully');
    }
}
