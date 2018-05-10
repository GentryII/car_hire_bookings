<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function contact(){
        return view('pages.contact-us');
    }

    public function about(){
        return view('pages.about-us');
    }

    /*This function returns the booking form through which clients can login and manage their bookings*/
    public function bookings(){
        return view('pages.bookings');
    }

    public function book($request){
        
    }
}
