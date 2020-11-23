<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    function Get($id){
        return Subscriber::where("_id", $id)->first();
    }

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

    function SaveSubscriptionStatus($id, $cardtype, $status){
        $subscriber = $this->Get($id);
        $cards = $subscriber['cards'];

        $cards[$cardtype] = $status;

        $subscriber['cards'] = $cards;
        $subscriber->save();
    }
}
