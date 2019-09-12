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

    public function createInvestor(InvestorRegistrationRequest $investorData)
    {
        $data = new Investor();
        $data->ccupation     = $investorData->input('occupation');
        $data->address       = $investorData->input('address');
        $data->net_worth     = $investorData->input('net_worth');
        $data->date_of_birth = $investorData->input('date_of_birth');
        $data->save();

        return redirect()->back()->with('Investor Join Successfully !');
    }

}
