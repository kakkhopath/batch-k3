<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>{{ $title }} - Laravel 11 App</title>
        <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
        <link href="https://getbootstrap.com/docs/5.0/examples/headers/headers.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <div class="container-fluid">
                <!--Header Load-->
                <x-header />
            </div>
            <div class="container">
                <!--Main Content Load-->
                {{ $slot }}
            </div>
            <!--Footer Load-->
            <div class="container-fluid">
                <!--Footer Load-->
                <x-footer />
            </div>
        </main>
    </body>
</html>
