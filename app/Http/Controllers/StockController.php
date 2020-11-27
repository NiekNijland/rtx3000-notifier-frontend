<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    function Get($websiteName){
        $stock = Stock::where('website.name', $websiteName)->latest()->first();

        if($stock == null){
            $stock = $this->CreateEmpty($websiteName);
        }

        return $stock;
    }

    private function CreateEmpty($websiteName){
        $stock = new Stock();

        $website = [];
        $website['name'] = $websiteName;
        $website['url'] = '';
        $stock['website'] = $website;

        $values = [];
        $values['RTX3070'] = 0;
        $values['RTX3080'] = 0;
        $values['RTX3090'] = 0;
        $stock['values'] = $values;

        return $stock;
    }
}
