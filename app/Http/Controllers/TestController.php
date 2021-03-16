<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(Request $request)
    {
        return $request->all();
    }
    //
}
