<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class MegekkoController extends Controller
{
    function GetLatestStock(){
        return Stock::where('website.name', "Megekko")->latest()->first();
    }
}
