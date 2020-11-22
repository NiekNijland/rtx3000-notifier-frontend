<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class AzertyController extends Controller
{
    function GetLatestStock(){
        return Stock::where('website.name', "Azerty")->latest()->first();
    }
}
