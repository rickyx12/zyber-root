<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class WaterController extends Controller
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


    public function getTurbidity() {
        return DB::select("SELECT * FROM turbidity ORDER BY id DESC");
    }

}
