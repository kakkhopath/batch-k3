<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    //Home Page Load
    public function index() {
        $data = [
            'title' => 'Home Page',
        ];
        return view('pages.home', $data);
    }

    //About Us Page
    public function about_us() {
        $data = [
            'title' => 'About Us Page',
        ];
        return view('pages.aboutus', $data);
    }

    //Services Page
    public function services($value) {
        $value='View '.$value;
        $data = [
            'title' => 'Service Page',
            'value' => $value,
        ];
        return view('pages.service', $data);
    }
}
