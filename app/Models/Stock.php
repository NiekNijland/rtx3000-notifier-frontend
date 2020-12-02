<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Stock extends Model
{
    function GetCardStock($cardname){
        if(isset($this['values'][$cardname])){
            return $this['values'][$cardname];
        }else{
            return 0;
        }
    }
}
