<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    function Create($email, $card){
        $subscriber = Subscriber::where("email", $email)->first();
        $cards = [];

        if($subscriber == null) {
            $subscriber = new Subscriber();
            $subscriber['email'] = $email;
        }else{
            $cards = $subscriber['cards'];
        }
        $cards[$card] = true;
        $subscriber['cards'] = $cards;

        $subscriber->save();
    }
}
