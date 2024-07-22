<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyProgram;

class MyProgramController extends Controller
{
    public function booking_meeeting(){
        $myprograms = MyProgram::all();
        $urlMyprogram = Myprogram::where('slug', 'book-meeting')->first();
        $url = $urlMyprogram->url;
        $title = "book-meeting";
        return view('pages.myprogram.booking-meeting', compact('title', 'myprograms', 'url'));
    }

    public function budget(){
        $myprograms = MyProgram::all();
        $urlMyprogram = MyProgram::where('slug', 'budget')->first();
        $url = $urlMyprogram->url;
        $title = "budget";
        return view('pages.myprogram.budget', compact('title', 'myprograms', 'url'));
    }

    public function employee_self_service(){
        $myprograms = Myprogram::all();
        $urlMyprogram = MyProgram::where('slug', 'ess')->first();
        $url = $urlMyprogram->url;
        $title = "ess";
        return view('pages.myprogram.ess', compact('title', 'myprograms', 'url'));
    }

    public function mailblast(){
        $myprograms = Myprogram::all();
        $urlMyprogram = MyProgram::where('slug', 'blast')->first();
        $url = $urlMyprogram->url;
        $title = "blast";
        return view('pages.myprogram.mailblast', compact('title', 'myprograms', 'url'));
    }

    public function request_magang(){
        $myprograms = Myprogram::all();
        $urlMyprogram = MyProgram::where('slug', 'magang')->first();
        $url = $urlMyprogram->url;
        $title = "magang";
        return view('pages.myprogram.request-magang', compact('title', 'myprograms', 'url'));
    }

    public function e_audit(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'e-audit')->first();
        $url = $urlMyprogram->url;
        $title = "e-audit";
        return view('pages.myprogram.e-audit', compact('title', 'myprograms', 'url'));
    }

    public function e_leave(){
        $myprograms = Myprogram::all();
        $urlMyprogram = MyProgram::where('slug', 'leave')->first();
        $url = $urlMyprogram->url;
        $title = "leave";
        return view('pages.myprogram.e-leave', compact('title', 'myprograms', 'url'));
    }

    public function e_travel(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'e-travel')->first();
        $url = $urlMyprogram->url;
        $title = "e-travel";
        return view('pages.myprogram.e-travel', compact('title', 'myprograms', 'url'));
    }

    public function fams_gs(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'famsgs')->first();
        $url = $urlMyprogram->url;
        $title = "famsgs";
        return view('pages.myprogram.fams-gs', compact('title', 'myprograms', 'url'));
    }

    public function onar(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'onar')->first();
        $url = $urlMyprogram->url;
        $title = "onar";
        return view('pages.myprogram.onar', compact('title', 'myprograms', 'url'));
    }

    public function prk_online(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'prk-on')->first();
        $url = $urlMyprogram->url;
        $title = "prk-on";
        return view('pages.myprogram.prk-online', compact('title', 'myprograms', 'url'));
    }

    public function fams_tehnik(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'famstehnik')->first();
        $url = $urlMyprogram->url;
        $title = "famstehnik";
        return view('pages.myprogram.fams-tehnik', compact('title', 'myprograms', 'url'));
    }

    public function it_docs(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'it-docs')->first();
        $url = $urlMyprogram->url;
        $title = "it-docs";
        return view('pages.myprogram.it-docs', compact('title', 'myprograms', 'url'));
    }

    public function go_admin(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'epic-adm')->first();
        $url = $urlMyprogram->url;
        $title = "epic-adm";
        return view('pages.myprogram.go-admin', compact('title', 'myprograms', 'url'));
    }

    public function caroline(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'caroline')->first();
        $url = $urlMyprogram->url;
        $title = "caroline";
        return view('pages.myprogram.caroline', compact('title', 'myprograms', 'url'));
    }

    public function flexben_asuransi(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'flexben')->first();
        $url = $urlMyprogram->url;
        $title = "flexben";
        return view('pages.myprogram.flexben-asuransi', compact('title', 'myprograms', 'url'));
    }

    public function fams_prop(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'famsprop')->first();
        $url = $urlMyprogram->url;
        $title = "famsprop";
        return view('pages.myprogram.fams-prop', compact('title', 'myprograms', 'url'));
    }

    public function handling(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'handling')->first();
        $url = $urlMyprogram->url;
        $title = "handling";
        return view('pages.myprogram.handling', compact('title', 'myprograms', 'url'));
    }

    public function program_library(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'library')->first();
        $url = $urlMyprogram->url;
        $title = "library";
        return view('pages.myprogram.program-library', compact('title', 'myprograms', 'url'));
    }

    public function corporate_secretary(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'corp-secretrary')->first();
        $url = $urlMyprogram->url;
        $title = "corp-secretrary";
        return view('pages.myprogram.corporate-secretary', compact('title', 'myprograms', 'url'));
    }

    public function cash_advance(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'cash-advance')->first();
        $url = $urlMyprogram->url;
        $title = "cash-advance";
        return view('pages.myprogram.cash-advance', compact('title', 'myprograms', 'url'));
    }

    public function diagram_studio(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'diagram-studio')->first();
        $url = $urlMyprogram->url;
        $title = "diagram-studio";
        return view('pages.myprogram.diagram-studio', compact('title', 'myprograms', 'url'));
    }

    public function rt_pro(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'rt-pro')->first();
        $url = $urlMyprogram->url;
        $title = "rt-pro";
        return view('pages.myprogram.rt-pro', compact('title', 'myprograms', 'url'));
    }

    public function antv_talent(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'talent')->first();
        $url = $urlMyprogram->url;
        $title = "talent";
        return view('pages.myprogram.antv-talent', compact('title', 'myprograms', 'url'));
    }

    public function stc(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'stc-trial')->first();
        $url = $urlMyprogram->url;
        $title = "stc-trial";
        return view('pages.myprogram.stc', compact('title', 'myprograms', 'url'));
    }

    public function apoline(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'audio-post')->first();
        $url = $urlMyprogram->url;
        $title = "audio-post";
        return view('pages.myprogram.apoline', compact('title', 'myprograms', 'url'));
    }

    public function lsf(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'lsf')->first();
        $url = $urlMyprogram->url;
        $title = "lsf";
        return view('pages.myprogram.lsf', compact('title', 'myprograms', 'url'));
    }

    public function t_reg(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'ts-reg')->first();
        $url = $urlMyprogram->url;
        $title = "ts-reg";
        return view('pages.myprogram.t-reg', compact('title', 'myprograms', 'url'));
    }

    public function media_order(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'media-order')->first();
        $url = $urlMyprogram->url;
        $title = "media-order";
        return view('pages.myprogram.media-order', compact('title', 'myprograms', 'url'));
    }

    public function fams_wardrobe(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'famswardrobe')->first();
        $url = $urlMyprogram->url;
        $title = "famswardrobe";
        return view('pages.myprogram.fams-wardrobe', compact('title', 'myprograms', 'url'));
    }

    public function fleet_management(){
        $myprograms = Myprogram::all();
        $urlMyprogram = Myprogram::where('slug', 'fleetmanagement')->first();
        $url = $urlMyprogram->url;
        $title = "fleetmanagement";
        return view('pages.myprogram.fleet-management', compact('title', 'myprograms', 'url'));
    }
}

