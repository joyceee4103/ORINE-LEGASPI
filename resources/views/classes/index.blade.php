@extends('layouts.app')

@section('content')
<h2>CLASS LIST</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<a href="{{ route('classes.create') }}">+ Add New Class</a>
<a href="{{ route('schedules.index') }}">View All Schedules</a>

<table border="1" cellpadding="10" cellspacing="0" style="margin-top: 20px;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Teacher</th>
        <th>Schedule</th>
        <th>Actions</th>
    </tr>
    @foreach($classes  as $classItem)
    <tr>
        <td>{{ $classItem->id }}</td>
        <td>{{ $classItem->name }}</td>
        <td>{{ $classItem->teacher }}</td>
        <td>{{ $classItem->schedule }}</td>
        <td>
            <a href="{{ route('classes.show', $classItem->id) }}">View</a> |
            <a href="{{ route('classes.edit', $classItem->id) }}">Edit</a> |
            <form action="{{ route('classes.destroy', $classItem->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Delete this class?')">Delete</button>
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
    color: #561C24;
    margin: 20px;
}


/* Heading */
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #6d2932
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
    background: #F2B2B3;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    border-radius: 6px;
    overflow: hidden;
}
th{
    background-color: #F2B2B3;
}

tr {
    background: #F2B2B3; 
    
}

th, td {
    padding: 12px 15px;
    text-align: left;
}

th {
    background: #561c24;
    color: #6d2932;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 13px;
}

tr:nth-child(even) {
    background: #F2B2B3 ;
}



/* Action links */
td a {
    background: #531A24;
    color: white;
    border: none;
    padding: 6px 10px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 13px;
    transition: 0.3s;
}
td a:hover {
    text-decoration: underline;
}

/* Delete button */
td form button {
    background: #531A24;
    color: white;
    border: none;
    padding: 6px 10px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 13px;
    transition: 0.3s;
}
td form button:hover {
    background: #531A24;
}
</style>
