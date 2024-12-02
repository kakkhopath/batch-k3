@php
$url=request()->path();
@endphp
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title> @yield('title') - Laravel 10 App</title>
        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Favicons -->
        <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
        <link href="https://getbootstrap.com/docs/5.0/examples/headers/headers.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <div class="container">
                <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                    <a href="{{URL::to('/')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                        <span class="fs-4">Laravel 10 App</span>
                    </a>
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="{{URL::to('/')}}" class="nav-link {{$url=='/'?'active':''}}" aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="{{URL::to('/about-us')}}" class="nav-link {{$url=='about-us'?'active':''}}">About Us</a></li>
                        <li class="nav-item"><a href="{{URL::to('/services')}}" class="nav-link {{$url=='services'?'active':''}}">Services</a></li>
                    </ul>
                </header>
            </div>
            <div class="container">
                @yield('content')
            </div>
            <footer class="footer mt-auto py-3 bg-light">
                <div class="container">
                    <span class="text-muted">
                        <center>Footer Content Here....</center>
                    </span>
                </div>
            </footer>
        </main>
        <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
