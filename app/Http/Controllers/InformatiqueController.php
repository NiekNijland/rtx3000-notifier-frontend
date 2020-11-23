<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class InformatiqueController extends Controller
{
    function GetLatestStock(){
        return Stock::where('website.name', "Informatique")->latest()->first();
    }
}
