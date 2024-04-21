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
        $existingMark = Mark::where('student_id',  $student_id)->first();

        // If a mark with the same student ID exists, return to the mark view
        if ($existingMark) {

            // Calculate total marks
            $total = $existingMark->chemistry + $existingMark->english + $existingMark->malayalam + $existingMark->maths;
            $message =  'Student ' . $student->name . '\'s mark already Added ';
            return view('mark.show', ['marks' => $existingMark, 'student' => $student, 'total' => $total, 'message'=>$message]);
        }
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

        // If a mark with the same student ID exists, return to the mark view
        if ($existingMark) {
            // Find the student associated with the mark
            $student = Student::find($existingMark->student_id);

            // Calculate total marks
            $total = $existingMark->chemistry + $existingMark->english + $existingMark->malayalam + $existingMark->maths;
            $message =  'Student ' . $student->name . '\'s mark already Added ';
            return view('mark.show', ['marks' => $existingMark, 'student' => $student, 'total' => $total, 'message'=>$message]);
        }

        // If no existing mark found, create a new mark
        $marks = Mark::create($data);

        // Find the student associated with the mark
        $student = Student::find($request->student);

        // Calculate total marks
        $total = $marks->chemistry + $marks->english + $marks->malayalam + $marks->maths;
        $message = 'Mark added sucessfully';
        // Return the view with the created marks, student, and total marks
        return view('mark.show', ['marks' => $marks, 'student' => $student, 'total' => $total, 'message'=>$message]);
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
        $student = Student::find($mark->student_id);
        $total = $mark->chemistry + $mark->english + $mark->malayalam + $mark->maths;
        return view('mark.edit', [
            'marks' => $mark,
            'student' => $student,
            'total' => $total,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mark $mark)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'english' => ['required'],
            'malayalam' => ['required'],
            'maths' => ['required'],
            'chemistry' => ['required'],
        ]);
        $mark->update($data);
        // Find the student associated with the mark
        $student = Student::find($mark->student_id);
        // Calculate total marks
        $total = $mark->chemistry + $mark->english + $mark->malayalam + $mark->maths;
        $message = 'Mark of ' . $student->name . ' Updated';

        return view('mark.show', ['marks' => $mark, 'student' => $student, 'total' => $total, 'message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mark $mark)
    {
        //
    }
}
