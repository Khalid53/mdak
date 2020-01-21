<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index () {
        return view('front-end.home.home');
    }

    public function jobOffer () {
        return view('front-end.job.job-offer');
    }
    public function servicesInfo () {
        return view('front-end.services.services');
    }

    public function aboutInfo () {
        return view('front-end.about.about');
    }

    public function contactInfo () {
        return view('front-end.contact.contact');
    }

    public function jcuLoginInfo () {
        return view('front-end.user.jcu-login');
    }







}
