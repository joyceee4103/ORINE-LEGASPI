@extends('layouts.app')

@section('content')
<h2>Edit Schedule</h2>

<form action="{{ route('schedules.update', $schedule->id) }}" method="POST" class="schedule-form">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label>Select Class:</label>
        <select name="classroom_id" required>
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}" {{ $schedule->classroom_id == $classroom->id ? 'selected' : '' }}>
                    {{ $classroom->name }} - {{ $classroom->teacher }}
                </option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group">
        <label>Day:</label>
        <select name="day" required>
            <option value="Monday" {{ $schedule->day == 'Monday' ? 'selected' : '' }}>Monday</option>
            <option value="Tuesday" {{ $schedule->day == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
            <option value="Wednesday" {{ $schedule->day == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
            <option value="Thursday" {{ $schedule->day == 'Thursday' ? 'selected' : '' }}>Thursday</option>
            <option value="Friday" {{ $schedule->day == 'Friday' ? 'selected' : '' }}>Friday</option>
            <option value="Saturday" {{ $schedule->day == 'Saturday' ? 'selected' : '' }}>Saturday</option>
            <option value="Sunday" {{ $schedule->day == 'Sunday' ? 'selected' : '' }}>Sunday</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Start Time:</label>
        <input type="time" name="start_time" value="{{ $schedule->start_time }}" required>
    </div>
    
    <div class="form-group">
        <label>End Time:</label>
        <input type="time" name="end_time" value="{{ $schedule->end_time }}" required>
    </div>
    
    <div class="form-group">
        <label>Room (optional):</label>
        <input type="text" name="room" value="{{ $schedule->room }}" placeholder="e.g., Room 101">
    </div>
    
    <div class="form-actions">
        <button type="submit" class="action-btn">Update Schedule</button>
        <a href="{{ route('schedules.show', $schedule->id) }}" class="action-btn">View Details</a>
        <a href="{{ route('schedules.index') }}" class="action-btn secondary">Cancel</a>
    </div>
</form>
@endsection

<style>
/* General page */
body {
    font-family: Arial, sans-serif;
    background: #F5EFE7;
    color: #6d2932;
    margin: 20px;
}

/* Heading */
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #6d2932;
}

/* Form container */
.schedule-form {
    background: #F2B2B3;
    border-radius: 8px;
    padding: 30px;
    margin: 20px auto;
    max-width: 600px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

/* Form groups */
.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #561c24;
    text-transform: uppercase;
    font-size: 13px;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #d4c4a8;
    border-radius: 5px;
    font-size: 14px;
    color: #6d2932;
    background: white;
    box-sizing: border-box;
    transition: border-color 0.3s;
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: #6d2932;
}

.form-group input::placeholder {
    color: #999;
    font-style: italic;
}

/* Form actions */
.form-actions {
    text-align: center;
    margin-top: 30px;
    padding-top: 20px;
    border-top: 1px solid #d4c4a8;
}

/* Action buttons */
.action-btn {
    display: inline-block;
    margin: 5px 10px;
    padding: 10px 20px;
    background: #6d2932;
    color: white !important;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    transition: 0.3s;
    font-family: Arial, sans-serif;
}

.action-btn:hover {
    background: #561c24;
}

.action-btn.secondary {
    background: #95857a;
}

.action-btn.secondary:hover {
    background: #7a6b61;
}

/* Responsive design */
@media (max-width: 768px) {
    .schedule-form {
        margin: 10px;
        padding: 20px;
    }
    
    .form-actions {
        text-align: center;
    }
    
    .action-btn {
        display: block;
        margin: 10px auto;
        width: 100%;
        max-width: 200px;
    }
}
</style>