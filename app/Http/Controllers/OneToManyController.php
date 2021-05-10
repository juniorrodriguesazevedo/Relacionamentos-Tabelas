<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;

class OneToManyController extends Controller
{
    public function oneToMany()
    {
        // $country = Country::where('name', 'Brasil')->get()->first();
        $keySearch = 'a';
        $countries = Country::where('name', 'LIKE', "%{$keySearch}%")->with('states')->get();

        foreach ($countries as $country) {
            echo "<b>{$country->name}</b>";

            $states = $country->states;

            foreach ($states as $state) {
                echo "<br>{$state->name} - {$state->initials}";
            }

            echo '<hr>';
        }
    }

    public function manyToOne()
    {
        $stateName = 'Tocantins';
        $state = State::where('name', $stateName)->get()->first();
        echo "<b>Estado: </b> {$state->name} <hr>";

        $country = $state->country->name;

        echo "<b>País: </b> {$country}";
    }
}
