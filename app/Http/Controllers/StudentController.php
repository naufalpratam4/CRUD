<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = student::paginate(10);
        return view("student.admin")->with(["student" => Student::all()]);
        // return response()->json([
        //     'data', $students
        // ]);
    }



    public function listStudents()
    {
        return view("student.listStudents")->with(['student' => Student::all()]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // student::create($request->all());

        $students = student::create([
            'id' => $request->id,
            'Name' => $request->Name,
            'Address' => $request->Address,
            'noHp' => $request->noHp,
        ]);

        // return response()->json([
        //     'data' => $students
        // ]);

        return redirect()->route('student.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */

    // all
    public function showStudents(student $student, $id)
    {
        //
        // $student = Student::find($id);

        return response()->json(['data' => $student, 'status' => 200]);
    }

    // by ID
    public function showStudent(student $student, $id)
    {
        //
        $student = Student::find($id);

        return response()->json(['data' => $student, 'status' => 200]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $student = Student::find($id);

        return view('student.update', compact('student'))->with('update', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $student = Student::findOrFail($id);

        $student->update($request->all());
        return redirect()->route('student.index')->with('success', 'Data berhasil di update');
        // $student->name = $request->name;
        // $student->address = $request->address;
        // $student->noHp = $request->noHp;
        // $student->save();

        // return response()->json(['data' => $student]);
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);

        return view('student.detail', compact('student'))->with('detail', $student);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/student')->with('success', 'Data berhasil dihapus');
    }
}
