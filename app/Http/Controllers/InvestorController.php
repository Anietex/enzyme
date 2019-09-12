<?php

namespace App\Http\Controllers;

use App\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    private $investor;

    public function __construct(Investor $investor)
    {
        $this->investor=$investor;
    }

    public function index()
    {
        $investors = Investor::all();
        return view('', compact('investors'));
    }
}
