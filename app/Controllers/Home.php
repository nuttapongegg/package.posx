<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Home');
    }

     public function Features()
    {
        return view('Features');
    }

    public function Price()
    {
        return view('Price');
    }

    public function Manual()
    {
        return view('Manual');
    }

    public function Contact()
    {
        return view('Contact');
    }

    // public function testimonial()
    // {
    //     return view('testimonial');
    // }
}
