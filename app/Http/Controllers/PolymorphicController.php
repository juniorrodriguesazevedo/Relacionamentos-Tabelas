<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class PolymorphicController extends Controller
{
    public function polymorphic()
    {
        $city = City::where('name', 'Osasco')->get()->first();
        echo "<b>{$city->name}</b><hr>";
        
        $comments = $city->comments;

        foreach ($comments as $comment) {
            echo "{$comment->description}";
        }
    }

    public function polymorphicInsert()
    {
        $city = City::where('name', 'Osasco')->get()->first();
        echo "<b>{$city->name}</b>";

        $comment = $city->comments()->create([
            'description' => "New Comment {$city->name}",
        ]);
    }
}
