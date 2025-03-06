<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component {

    public string $title;

    public function __construct($title = 'Home Page') {
        $this->title = $title;
    }

    public function render() {
        return view('components.layout');
    }
}
