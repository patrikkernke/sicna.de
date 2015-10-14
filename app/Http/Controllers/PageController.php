<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    
    /**
     * Shows welcome page
     * 
     * @return Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('pages.welcome');
    }

    /**
     * Shows page sunprotection for cars
     * 
     * @return Illuminate\Http\Response
     */
    public function sunprotection_cars()
    {
        return view('pages.sunprotection-cars');
    }

    /**
     * Shows folation page
     * 
     * @return Illuminate\Http\Response
     */
    public function folation()
    {
        return view('pages.folation');
    }

    /**
     * Shows about us - page
     * 
     * @return Illuminate\Http\Response
     */
    public function aboutUs()
    {
        return view('pages.about-us');   
    }
    
}
