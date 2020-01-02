<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullCallenderController extends Controller
{
    public function index(){
        return view('fullcalender.master');
    }

    public function googlecalendar(){
        return view('googlecalendar');
    }

    public function timegrid(){
        return view('timegrid');
    }

    public function test(){
        return view('test');
    }
    
}
