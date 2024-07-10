<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProgramController extends Controller
{
    public function booking_meeeting(){
        return view('pages.myprogram.booking-meeting');
    }

    public function budget(){
        return view('pages.myprogram.budget');
    }

    public function employee_self_service(){
        return view('pages.myprogram.ess');
    }

    public function mailblast(){
        return view('pages.myprogram.mailblast');
    }

    public function request_magang(){
        return view('pages.myprogram.request-magang');
    }

    public function e_audit(){
        return view('pages.myprogram.e-audit');
    }

    public function e_leave(){
        return view('pages.myprogram.e-leave');
    }

    public function e_travel(){
        return view('pages.myprogram.e-travel');
    }
}
