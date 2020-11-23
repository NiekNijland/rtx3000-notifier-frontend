<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Subscriber extends Model
{
    function GetSubscriptionStatus($cardtype){
        if(isset($this['cards'][$cardtype])){
            return $this['cards'][$cardtype];
        }else{
            return false;
        }
    }
}
