@extends('layouts.app')

@section('content')
<h2>Add New Class</h2>

<form action="{{ route('classes.store') }}" method="POST">
    @csrf
    
    <p>
        <label>Class Name:</label><br>
        <input type="text" name="name" required style="width: 300px;">
    </p>
    
    <p>
        <label>Teacher:</label><br>
        <input type="text" name="teacher" required style="width: 300px;">
    </p>
    
    <p>
        <label>Schedule (optional):</label><br>
        <textarea name="schedule" style="width: 300px; height: 100px;" placeholder="e.g., MWF 9:00-10:00 AM"></textarea>
    </p>
    
    <button type="submit">Create Class</button>
    <a href="{{ route('classes.index') }}">Cancel</a>
</form>
@endsection
<style>
/* Form container */
body{
    background-color: #F5EFE7;
}
form {
    max-width: 400px;
    margin: 0 auto;
    background: #F2B2B3;
    padding: 20px 25px;
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

/* Heading */
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #34495e;
}

/* Labels */
form label {
    font-weight: 600;
    color: #2c3e50;
    display: block;
    margin-bottom: 6px;
}

/* Inputs & textarea */
form input[type="text"],
form textarea {
    width: 100% !important;
    padding: 10px 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    outline: none;
    transition: border 0.3s;
}
form input[type="text"]:focus,
form textarea:focus {
    border-color: #3498db;
    box-shadow: 0 0 4px rgba(52,152,219,0.4);
}

/* Form groups */
form p {
    margin-bottom: 15px;
}

/* Buttons */
form button {
    background: #531A24;
    color: white;
    border: none;
    padding: 10px 18px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
    transition: 0.3s ease;
}
form button:hover {
    background: #7f8c8d;
}   

/* Cancel link styled like button */
form a {
    margin-left: 10px;
    padding: 10px 16px;
    background: #531A24;
    color: white !important;
    text-decoration: none;
    border-radius: 5px;
    font-size: 14px;
    transition: 0.3s;
}
form a:hover {
    background: #7f8c8d;
}
</style>
