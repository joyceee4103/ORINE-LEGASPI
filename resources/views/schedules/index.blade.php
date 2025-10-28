@extends('layouts.app')

@section('content')
<h2>Schedule List</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<a href="{{ route('schedules.create') }}" class="action-btn">+ Add New Schedule</a>
<a href="{{ route('classes.index') }}" class="action-btn">Back to Classes</a>
<table border="1" cellpadding="10" cellspacing="0" style="margin-top: 20px;">
    <tr>
        <th>ID</th>
        <th>Class</th>
        <th>Teacher</th>
        <th>Day</th>
        <th>Time</th>
        <th>Room</th>
        <th>Actions</th>
    </tr>
    @foreach($schedules as $schedule)
    <tr>
        <td>{{ $schedule->id }}</td>
        <td>{{ $schedule->classroom->name }}</td>
        <td>{{ $schedule->classroom->teacher }}</td>
        <td>{{ $schedule->day }}</td>
        <td>{{ $schedule->start_time }} - {{ $schedule->end_time }}</td>
        <td>{{ $schedule->room ?? 'TBA' }}</td>
        <td>
            <a href="{{ route('schedules.show', $schedule->id) }}">View</a> |
            <a href="{{ route('schedules.edit', $schedule->id) }}">Edit</a> |
            <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Delete this schedule?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
<style>
/* General page */
body {
    font-family: Arial, sans-serif;
    background: #F5EFE9;
    color: #6d2932;
    margin: 20px;
}

/* Heading */
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #6d2932
}
/* Reusable button style for links */
.action-btn {
    display: inline-block;
    margin: 5px 10px 15px 0;
    padding: 8px 14px;
    background: #6d2932;
    color: white !important;
    text-decoration: none;
    border-radius: 5px;
    font-size: 14px;
    transition: 0.3s;
}

/* Success message */
p[style*="color: green;"] {
    background: #E8D8C4;
    border: 1px solid #6d2932;
    padding: 8px 12px;
    border-radius: 5px;
    width: fit-content;
    margin: 0 auto 20px auto;
    font-weight: bold;
    color: #561c24 !important;
}

/* Links (buttons) */
a[href*="classes/create"],
a[href*="schedules"] {
    display: inline-block;
    margin: 5px 10px 15px 0;
    padding: 8px 14px;
    background: #6d2932;
    color: #E8D8C4 !important;
    text-decoration: none;
    border-radius: 5px;
    font-size: 14px;
    transition: 0.3s ease;
}
a[href*="classes/create"]:hover,
a[href*="schedules"]:hover {
    background: #6d2932;
}

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
    background: #F5EFE9;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    border-radius: 6px;
    overflow: hidden;
    border: 1px solid #6d2932;
}

th, td {
    padding: 12px 15px;
    text-align: left;
    border: 1px solid #6d2932;
}

th {
    background: #f8d7da;
    color: #6d2932;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 13px;
}

/* First data row (odd) - Pink */
tbody tr:nth-child(odd) {
    background: #f8d7da;
}

/* Second data row (even) - White */
tbody tr:nth-child(even) {
    background: pink;
}


/* Action links - Keep maroon */
td a {
    background: #6d2932;
    color: white;
    border: none;
    padding: 6px 10px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 13px;
    transition: 0.3s;
    text-decoration: none;
}
td a:hover {
    background: #561c24;
    text-decoration: none;
}

/* Delete button - Keep maroon */
td form button {
    background: #6d2932;
    color: white;
    border: none;
    padding: 6px 10px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 13px;
    transition: 0.3s;
}
td form button:hover {
    background: #561c24;
}


</style>