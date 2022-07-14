<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\cv;

class cvController extends Controller
{
    public function index() {
    	return view('frontend.index');
    }
    
    public function about() {
    	return view('frontend.about');
    }
    
    public function contact() {
    	return view('frontend.contact');
    }

    public function privacy_policy() {
    	return view('frontend.privacy_policy');
    }

    public function cv_builder() {
    	return view('frontend.cv_builder');
    }

    public function cv() {
    	return view('frontend.cv');
    }

}
