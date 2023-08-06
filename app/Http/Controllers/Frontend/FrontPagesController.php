<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
    /**
     * Home Page
     *
     * HomePage of Application
     *
     * @return void
     */
    public function index()
    {
        return view('frontend.pages.index');
    }

    /**
     * About Us Page
     *
     * About Us Page of Application
     *
     * @return void
     */
    public function aboutUs()
    {
        return view('frontend.pages.about-us');
    }

    /**
     * Services Page
     *
     * Services Page of Application
     *
     * @return void
     */
    public function services()
    {
        return view('frontend.pages.services');
    }

    /**
     * Team Page
     *
     * Team Page of Application
     *
     * @return void
     */
    public function team()
    {
        return view('frontend.pages.team');
    }

    /**
     * Contact Page
     *
     * Contact Page of Application
     *
     * @return void
     */
    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
