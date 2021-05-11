<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class HasManyThroughController extends Controller
{
    public function hasManyThrough()
    {
        $country = Country::where('name', 'Brasil')->get()->first();
        echo "<b>País: </b>{$country->name}: ";

        $cities = $country->cities;

        foreach ($cities as $city) {
            echo " {$city->name}, ";
        }

        echo "<br>Total de cidades: {$cities->count()}";
    }
}
