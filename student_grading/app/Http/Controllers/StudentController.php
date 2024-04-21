<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::query()->where('user_id', request()->user()->id)->orderBy('created_at', 'desc')->paginate(10);

        return view('student.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $user_id = intval($student->user_id);
        $id = intval(request()->user()->id);
        if ($id !== $user_id) {
            abort(403);
        }
        return view('student.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $user_id = intval($student->user_id);
        $id = intval(request()->user()->id);
        if ($id !== $user_id) {
            abort(403);
        }
        return view('student.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $user_id = intval($student->user_id);
        $id = intval($request->user()->id);
        if ($id !== $user_id) {
            abort(403);
        }
        $data = $request->validate([
            'name' => ['required', 'string'],
            'course' => ['required', 'string'],
            'branch' => ['string'],
            'address' => ['string'],
            'date_of_birth' => ['required'],
            'registration_number' => ['required']
        ]);

        $student->update($data);
        return to_route('student.index')->with('message', 'Student ' . $student->name . ' Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
