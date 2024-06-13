<?php

namespace App\Http\Controllers;

use App\Models\invo;
use Illuminate\Http\Request;

class invoController extends Controller
{
    public function index() {
        $invo = invo::all();
        return view('invo.pem',compact(['invo']));
    }
}
