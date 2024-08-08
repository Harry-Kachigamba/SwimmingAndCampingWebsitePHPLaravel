<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Viewing home page
    public function home() {
        return view('home');
    }

    //Viewing information page
    public function information() {
        return view('information');
    }

    //Viewing available page
    public function available() {
        return view('available');
    }

    //Viewing reviews page
    public function reviews() {
        return view('reviews');
    }

    //Viewing features page
    public function features() {
        return view('features');
    }

    //Viewing features page
    public function contact() {
        return view('contact');
    }

    //Viewing attractions page
    public function attractions() {
        return view('attractions');
    }
}
