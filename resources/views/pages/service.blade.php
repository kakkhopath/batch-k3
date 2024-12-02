@extends('layouts.app')
@section('title',$title)
@section('content')
<section>
    <!--Print Larvel Data-->
    <h1 style="text-align: center"> Welcome To {{$title}}</h1>
</section>
<section>
    <!--Print Larvel Data-->
    <h1 style="text-align: center">{{$value}}</h1>
</section>
@endsection