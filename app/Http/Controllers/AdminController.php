<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $lecturers = User::where('role', 'lecturer')->get();
        $courses = Course::with('lecturer')->get();
        return view('admin.dashboard', compact('lecturers', 'courses'));
    }

    public function addCourse(Request $request)
    {
        $request->validate([
            'course_code' => 'required',
            'course_title' => 'required',
            'lecturer_id' => 'required'
        ]);

        Course::create([
            'course_code' => $request->course_code,
            'course_title' => $request->course_title,
            'lecturer_id' => $request->lecturer_id
        ]);

        return back()->with('success', 'Course added successfully');
    }

    public function deleteCourse($id)
    {
        Course::findOrFail($id)->delete();
        return back()->with('success', 'Course removed');
    }
}
