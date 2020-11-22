<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function GetIndex(){
        $azerty = app('App\Http\Controllers\AzertyController')->GetLatestStock();
        $megekko = app('App\Http\Controllers\MegekkoController')->GetLatestStock();

        return view('index', ['azerty' => $azerty, 'megekko' => $megekko]);
    }

    public function PostGetUpdates(Request $request)
    {
        $cards = ["RTX3090", "RTX3080", "RTX3070"];

        if (strlen($request['email']) > 5 && strlen($request['email']) < 256 && strpos($request['email'], "@") && in_array($request['cardtype'], $cards)) {
            if($request['cardtype'])
            app('App\Http\Controllers\SubscriberController')->Create($request['email'], $request['cardtype']);
            return response()->json(null, 201);
        } else {
            return response()->json(null, 400);
        }
    }
}
