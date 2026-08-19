<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function homeCourses()
    {
        // Fetch courses from the database (you can customize this query as needed)
        $courses = Course::limit(4)->get(); // Example: Fetch the latest 4 courses

        // Return the courses as a JSON response
        return response()->json($courses);
    }

    public function allCourses()
    {
        // Fetch all courses from the database
        $courses = Course::all();

        // Return the courses as a JSON response
        return response()->json($courses);
    }

    public function courseDetails(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|integer',
        ]);

        $course = Course::find($validatedData['id']);
        if(!$course){
            return response()->json(['message' => 'Invalid course ID'], 400);
        }

        return response()->json($course);
    }
}
