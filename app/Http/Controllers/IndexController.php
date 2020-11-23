<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function GetIndex(){
        $azerty = app('App\Http\Controllers\AzertyController')->GetLatestStock();
        $megekko = app('App\Http\Controllers\MegekkoController')->GetLatestStock();
        $cdromland = app('App\Http\Controllers\CdromlandController')->GetLatestStock();
        $informatique = app('App\Http\Controllers\InformatiqueController')->GetLatestStock();

        return view('index', ['azerty' => $azerty, 'megekko' => $megekko, 'cdromland' => $cdromland, 'informatique' => $informatique]);
    }

    public function PostGetUpdates(Request $request)
    {
        $cards = ["RTX3090", "RTX3080", "RTX3070"];

        if (strlen($request['email']) > 5 && strlen($request['email']) < 256 && strpos($request['email'], "@") && in_array($request['cardtype'], $cards)) {
            app('App\Http\Controllers\SubscriberController')->Create($request['email'], $request['cardtype']);
            return response()->json(null, 201);
        } else {
            return response()->json(null, 400);
        }
    }
}
