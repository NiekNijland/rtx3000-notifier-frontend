<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class CdromlandController extends Controller
{
    function GetLatestStock(){
        return Stock::where('website.name', "Cdromland")->latest()->first();
    }
}
