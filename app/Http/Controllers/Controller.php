<?php

namespace App\Http\Controllers;

abstract class Controller
{
   // In ClassController
public function index()
{
    $classes = \App\Models\Classes::all(); // returns objects
    return view('classes.index', compact('classes'));
}

}
