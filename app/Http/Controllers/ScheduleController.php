<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with('classroom')->get();
        return view('schedules.index', compact('schedules'));
    }

    public function create()
    {
        $classrooms = Classroom::all();
        return view('schedules.create', compact('classrooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'classroom_id' => 'required|exists:classrooms,id',
            'day' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        Schedule::create($request->all());

        return redirect()->route('schedules.index')->with('success', 'Schedule created successfully!');
    }

    // Replaced the route model binding parameter to explicitly use the ID
    public function show($id)
    {
        // Fetch the schedule by its ID and eagerly load the classroom relationship
        // to ensure the data is available for the view.
        $schedule = Schedule::with('classroom')->findOrFail($id);
        
        return view('schedules.show', compact('schedule'));
    }

    public function edit(Schedule $schedule)
    {
        $classrooms = Classroom::all();
        return view('schedules.edit', compact('schedule', 'classrooms'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'classroom_id' => 'required|exists:classrooms,id',
            'day' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $schedule->update($request->all());

        return redirect()->route('schedules.index')->with('success', 'Schedule updated successfully!');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedules.index')->with('success', 'Schedule deleted successfully!');
    }
}
