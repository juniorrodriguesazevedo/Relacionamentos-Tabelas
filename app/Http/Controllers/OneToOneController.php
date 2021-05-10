<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class OneToOneController extends Controller
{
    public function oneToOne()
    {
        $country = Country::where('name', 'China')->get()->first();

        $location = $country->location;

        echo $country->name;
        echo "<hr>Latitude: {$location->latitude}";
        echo "<br>Longitude: {$location->longitude}";
    }
}
