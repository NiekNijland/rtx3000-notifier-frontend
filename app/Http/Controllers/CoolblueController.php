<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class CoolblueController extends Controller
{
    function GetLatestStock(){
        return Stock::where('website.name', "Coolblue")->latest()->first();
    }
}
