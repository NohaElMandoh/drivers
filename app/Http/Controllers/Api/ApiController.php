<?php

namespace App\Http\Controllers\Api;

use App\Models\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ApiController extends Controller
{
   
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function get_driver()
    {
      
        $drivers=Driver::get();
        return response()->json(['success' => true, 'data' => $drivers], 200);

    }
}
