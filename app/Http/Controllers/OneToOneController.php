<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Location;

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

    public function oneToOneInverse()
    {
        $latitude = 123;
        $longitude = 321;

        $location = Location::where('latitude', $latitude)->where('longitude', $longitude)->get()->first();

        $country = $location->country;

        echo $country->name;
    }

    public function oneToOneInsert()
    {
        $dataForm = [
            'name' => 'Argentina',
            'latitude' => 789,
            'longitude' => 987,
        ];

        $country = Country::create($dataForm);

        $country->location()->create($dataForm);
    }
}
