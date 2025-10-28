@extends('layouts.app')

@section('content')
<h2>Schedule Details</h2>

<div class="schedule-details">
    <div class="detail-row">
        <span class="label">ID:</span>
        <span class="value">{{ $schedule->id }}</span>
    </div>
    
    <div class="detail-row">
        <span class="label">Class:</span>
        <span class="value">{{ $schedule->classroom->name }}</span>
    </div>
    
    <div class="detail-row">
        <span class="label">Teacher:</span>
        <span class="value">{{ $schedule->classroom->teacher }}</span>
    </div>
    
    <div class="detail-row">
        <span class="label">Day:</span>
        <span class="value">{{ $schedule->day }}</span>
    </div>
    
    <div class="detail-row">
        <span class="label">Start Time:</span>
        <span class="value">{{ $schedule->start_time }}</span>
    </div>
    
    <div class="detail-row">
        <span class="label">End Time:</span>
        <span class="value">{{ $schedule->end_time }}</span>
    </div>
    
    <div class="detail-row">
        <span class="label">Room:</span>
        <span class="value">{{ $schedule->room ?? 'Not assigned' }}</span>
    </div>
</div>

<div class="action-buttons">
    <a href="{{ route('schedules.edit', $schedule->id) }}" class="action-btn">Edit Schedule</a>
    <a href="{{ route('schedules.index') }}" class="action-btn">Back to List</a>
    
    <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST" style="display:inline;" class="delete-form">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this schedule?')" class="delete-btn">Delete Schedule</button>
    </form>
</div>
@endsection

<style>
/* General page */
body {
    font-family: Arial, sans-serif;
    background: #F5EFE7 ;
    color: #6d2932;
    margin: 20px;
}

/* Heading */
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #6d2932;
}

/* Schedule details container */
.schedule-details {
    background: #F2B2B3;
    border-radius: 8px;
    padding: 20px;
    margin: 20px auto;
    max-width: 600px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

/* Detail rows */
.detail-row {
    display: flex;
    margin-bottom: 15px;
    padding: 10px 0;
    border-bottom: 1px solid #d4c4a8;
}

.detail-row:last-child {
    border-bottom: none;
    margin-bottom: 0;
}

.label {
    font-weight: bold;
    color: #561c24;
    min-width: 120px;
    text-transform: uppercase;
    font-size: 13px;
}

.value {
    color: #6d2932;
    font-size: 14px;
}

/* Action buttons container */
.action-buttons {
    text-align: center;
    margin: 30px 0;
}

/* Reusable button style for links */
.action-btn {
    display: inline-block;
    margin: 5px 10px;
    padding: 8px 14px;
    background: #6d2932;
    color: white !important;
    text-decoration: none;
    border-radius: 5px;
    font-size: 14px;
    transition: 0.3s;
}

.action-btn:hover {
    background: #561c24;
}

/* Delete button */
.delete-btn {
    background: #e74c3c;
    color: white;
    border: none;
    padding: 8px 14px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    transition: 0.3s;
    margin: 5px 10px;
}

.delete-btn:hover {
    background: #c0392b;
}

.delete-form {
    margin: 0;
}
</style>