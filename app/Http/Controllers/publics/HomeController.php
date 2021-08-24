<?php

namespace App\Http\Controllers\publics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller{

    /**
     * controller yang dapat diakses oleh semua user termasuk guest
     * 
     */

    public function index(){
        return view('pages.public.home');
    }
    
}
