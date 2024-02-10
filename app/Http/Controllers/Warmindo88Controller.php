<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Warmindo88Controller extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            return $this->index_doLogin();
        }

        return view('website.warmindo88.Auth.main');
    }


}
