<?php

namespace App\Http\Controllers;

use App\Startup;
use Illuminate\Http\Request;

class StartupController extends Controller
{


    public function listStartups(){

        $startups = Startup::all();
        return view('startups.list');

    }


    public function newStartup(){

        return view('startups.add');
    }

    public function viewStarthup(){

    }
}
