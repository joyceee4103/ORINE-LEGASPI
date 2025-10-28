<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classes = Classroom::all();
        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        return view('classes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'teacher' => 'required',
        ]);

        Classroom::create([
            'name' => $request->name,
            'teacher' => $request->teacher,
            'schedule' => $request->schedule ?? 'Not assigned'
        ]);

        return redirect()->route('classes.index')->with('success', 'Class created successfully!');
    }

    public function show(Classroom $class)
    {
        return view('classes.show', compact('class'));
    }

    public function edit(Classroom $class)
    {
        return view('classes.edit', compact('class'));
    }

    public function update(Request $request, Classroom $class)
    {
        $request->validate([
            'name' => 'required',
            'teacher' => 'required',
        ]);

        $class->update([
            'name' => $request->name,
            'teacher' => $request->teacher,
            'schedule' => $request->schedule ?? 'Not assigned'
        ]);

        return redirect()->route('classes.index')->with('success', 'Class updated successfully!');
    }

    public function destroy(Classroom $class)
    {
        $class->delete();
        return redirect()->route('classes.index')->with('success', 'Class deleted successfully!');
    }
}