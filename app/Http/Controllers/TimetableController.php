<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimetableController extends Controller
{
    //
    public function index($subject) {

        return "<h1>This is $subject timetable</h1>";
    }
}
