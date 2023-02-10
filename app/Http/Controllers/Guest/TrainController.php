<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = train::all();
        //dd($trains);
        return view('home', compact('trains'));
    }
}
