<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class travelController extends Controller
{
    public function index() {

        $travels = Travel::all();
        dump($travels);

        return view('content');
    }
}
