<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\student;
use Illuminate\Http\Request;

class StudentApiController extends Controller
{
    public function index()
    {
        $students = student::all();
        return response()->json($students);
    }
    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function update(Request $request, $id)
    {
    }
}
