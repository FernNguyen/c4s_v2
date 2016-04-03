<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function notfound(){
        $data = array(
            'home_page' => false
        );
        return view('pages.404')->with('data', $data);
    }

}
