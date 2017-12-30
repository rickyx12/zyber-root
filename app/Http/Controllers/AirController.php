<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AirController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function getAirValue() {
        return $results = app('db')->select("SELECT * FROM air");
    }

    //
}
