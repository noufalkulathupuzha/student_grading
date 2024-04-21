<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use App\Models\Student;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student_id = request('student');
        $student = Student::find(request()->student);

        return view('mark.create', ['student_id' => $student_id, 'student' => $student]);
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'english' => ['required'],
            'malayalam' => ['required'],
            'maths' => ['required'],
            'chemistry' => ['required'],
        ]);

        // Add the student ID to the data array
        $data['student_id'] = $request->student;

        // Check if a mark with the same student ID already exists
        $existingMark = Mark::where('student_id', $data['student_id'])->first();
        // Find the student associated with the mark
        // If a mark with the same student ID exists, return to the mark view
        if ($existingMark) {
            $student = Student::find($existingMark->student_id);

            // Calculate total marks
            $total = $existingMark->chemistry + $existingMark->english + $existingMark->malayalam + $existingMark->maths;

            return view('mark.show', ['marks' => $existingMark, 'student' => $student, 'total' => $total]);
        }

        // If no existing mark found, create a new mark
        $marks = Mark::create($data);

        // Find the student associated with the mark
        $student = Student::find($request->student);

        // Calculate total marks
        $total = $marks->chemistry + $marks->english + $marks->malayalam + $marks->maths;

        // Return the view with the created marks, student, and total marks
        return view('mark.show', ['marks' => $marks, 'student' => $student, 'total' => $total]);
    }



    /**
     * Display the specified resource.
     */
    public function show(Mark $mark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mark $mark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mark $mark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mark $mark)
    {
        //
    }
}
