<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bike;

class HomepageController extends Controller
{
    public function index()
    {
        $bikes = Bike::latest()->get();
        return view('frontend.homepage', compact('bikes'));
    }
}
