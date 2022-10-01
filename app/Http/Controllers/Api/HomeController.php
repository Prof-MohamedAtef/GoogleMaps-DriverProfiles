<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function profiles()
    {

        $profiles=Profile::all();
        return response()->json(
            ['data' => $profiles],
            200
        );
    }
}
