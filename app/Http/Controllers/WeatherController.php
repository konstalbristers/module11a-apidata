<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WeatherController extends Controller
{
    public function index()
    {
        // Read the JSON file from storage
        $json = Storage::get('weather.json');

        // Decode JSON into PHP associative array
        $weatherData = json_decode($json, true);

        // Pass data to the Blade view
        return view('weather.index', ['weather' => $weatherData]);
    }
}
