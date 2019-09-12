<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvestorRegistrationRequest;
use App\Investor;

class InvestorController extends Controller
{

    public function index()
    {
        $investors = Investor::all();
        return view('investor', compact('investors'));
    }

}
