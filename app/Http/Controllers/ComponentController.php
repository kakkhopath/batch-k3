<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller {

    //Home Page Load
    public function index() {
        $data = [
            'title' => 'Home Page',
        ];
        return view('pages.new.home', $data);
    }

    //About Page Load
    public function about() {
        $data = [
            'title' => 'About Page',
        ];
        return view('pages.new.about', $data);
    }

    //Portfolio Page Load
    public function portfolio() {
        $portfolioImages = [
            'Technology' =>url('images/technology.jpg'),
            'Business' => url('images/business.jpeg'),
            'Design' => url('images/design.jpg'),
            'Coding' => url('images/code.jpg'),
            'Startup' => url('images/startup.jpg'),
            'Software' => url('images/software.jpg'),
        ];
        $data = [
            'title' => 'Portfolio Page',
            'portfolioImages' => $portfolioImages
        ];
        return view('pages.new.portfolio', $data);
    }
}
