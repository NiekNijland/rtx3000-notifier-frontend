<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Stock extends Model
{
    function GetCardStock($cardname){
        return $this['values'][$cardname];
    }
}
