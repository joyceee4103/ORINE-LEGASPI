@extends('layouts.app')

@section('content')
<h2>Edit Class</h2>

<form action="{{ route('classes.update', $class->id) }}" method="POST" class="schedule-form">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label>Class Name:</label>
        {{-- Removed <br> and inline style --}}
        <input type="text" name="name" value="{{ $class->name }}" required>
    </div>
    
    <div class="form-group">
        <label>Teacher:</label>
        {{-- Removed <br> and inline style --}}
        <input type="text" name="teacher" value="{{ $class->teacher }}" required>
    </div>
    
    <div class="form-group">
        <label>Schedule:</label>
        {{-- Removed <br> and inline style. Note: CSS will style <textarea> if a separate rule is added, otherwise it will be styled by the generic input/select rule if not specific. I'll add a rule for textarea in the CSS below. --}}
        <textarea name="schedule">{{ $class->schedule }}</textarea>
    </div>
    
    <div class="form-actions">
        <button type="submit" class="action-btn">Update Class</button>
        {{-- Used .action-btn.secondary for Cancel for different styling --}}
        <a href="{{ route('classes.index') }}" class="action-btn secondary">Cancel</a>
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
.form-group select,
.form-group textarea { /* ADDED TEXTAREA */
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
.form-group select:focus,
.form-group textarea:focus { /* ADDED TEXTAREA */
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