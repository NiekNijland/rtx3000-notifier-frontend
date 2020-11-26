<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class CyberportController extends Controller
{
    function GetLatestStock(){
        return Stock::where('website.name', "Cyberport")->latest()->first();
    }
}
