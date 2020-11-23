<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreferencesController extends Controller
{
    function GetPreferences($id){
        $subscriber = app('App\Http\Controllers\SubscriberController')->Get($id);

        if($subscriber != null){
            return view('preferences', ['subscriber' => $subscriber]);
        }else{
            abort(404);
        }
    }

    function TogglePreferences(Request $request){
        $cards = ["RTX3090", "RTX3080", "RTX3070"];

        if (isset($request['cardtype']) && in_array($request['cardtype'], $cards) && isset($request['subscriber-id'])) {
            $subscriber = app('App\Http\Controllers\SubscriberController')->Get($request['subscriber-id']);
            if($subscriber != null){
                $newstatus = !$subscriber->GetSubscriptionStatus($request['cardtype']);
                app('App\Http\Controllers\SubscriberController')->SaveSubscriptionStatus($request['subscriber-id'], $request['cardtype'], $newstatus);
            }else{
                return response()->json(null, 400);
            }

            return response()->json(null, 201);
        } else {
            return response()->json(null, 400);
        }
    }
}
