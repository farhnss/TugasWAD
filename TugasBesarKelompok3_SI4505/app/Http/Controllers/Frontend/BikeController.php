<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Bike;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    public function index()
    {
        $bikes = Bike::get();

        return view('frontend.bike', compact('bikes'));
    }

    public function show(Bike $bike)
    {
        $bikes = Bike::get();
        $related_bikes = Bike::get();

        return view('frontend.detail', compact('bike', 'related_bikes'));
    }
}
