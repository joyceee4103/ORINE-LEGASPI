@extends('layouts.app')

@section('content')
<h2>CLASS DETAILS</h2>

{{-- Main container for the details --}}
<div class="schedule-details">
    
    {{-- Detail Row 1: ID --}}
    <div class="detail-row">
        <div class="label">ID:</div>
        <div class="value">{{ $class->id }}</div>
    </div>
    
    {{-- Detail Row 2: Name --}}
    <div class="detail-row">
        <div class="label">Name:</div>
        <div class="value">{{ $class->name }}</div>
    </div>
    
    {{-- Detail Row 3: Teacher --}}
    <div class="detail-row">
        <div class="label">Teacher:</div>
        <div class="value">{{ $class->teacher }}</div>
    </div>
    
    {{-- Detail Row 4: Schedule --}}
    <div class="detail-row">
        <div class="label">Schedule:</div>
        <div class="value">{{ $class->schedule }}</div>
    </div>

    {{-- Action Buttons --}}
    <div class="action-buttons">
        <a href="{{ route('classes.edit', $class->id) }}" class="action-btn">Edit Details</a>
        <a href="{{ route('classes.index') }}" class="action-btn secondary">Back to List</a>
    </div>
</div>
@endsection
<style>
  /* General page */
body {
    font-family: Arial, sans-serif;
    background: #F5EFE7 ; /* Earthy Beige/Tan */
    color: #6d2932; /* Deep Red/Maroon */
    margin: 20px;
}

/* Heading */
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #6d2932;
}

/* ---------------------------------------------------------------- */

/* NEW: Container for the details view, borrowing from .schedule-form */
.schedule-details {
    background: #F2B2B3; /* Light Cream/Beige */
    border-radius: 8px;
    padding: 30px;
    margin: 20px auto;
    max-width: 600px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

/* NEW: Styling for each detail row */
.detail-row {
    display: flex; /* Aligns label and value side-by-side */
    justify-content: space-between; /* Pushes them to opposite ends */
    margin-bottom: 15px;
    padding-bottom: 10px;
    border-bottom: 1px dashed #d4c4a8; /* Light divider */
    font-size: 16px;
}

.detail-row:last-child {
    border-bottom: none; /* No divider on the last row */
    margin-bottom: 0;
    padding-bottom: 0;
}

.detail-row .label {
    /* Borrowed label styles */
    font-weight: bold;
    color: #561c24; /* Darker Red/Maroon */
    text-transform: uppercase;
    font-size: 13px;
    flex-basis: 30%; /* Gives the label some space */
}

.detail-row .value {
    color: #6d2932; /* Deep Red/Maroon for the value */
    flex-basis: 65%; /* Gives the value more space */
    text-align: right; /* Aligns the value to the right */
    font-weight: 500;
}

/* ---------------------------------------------------------------- */

/* Action buttons container */
.action-buttons {
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
    .schedule-details {
        margin: 10px;
        padding: 20px;
    }
    
    .action-buttons {
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