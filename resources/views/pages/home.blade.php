@extends('layouts.app')
@section('title',$title)
@section('content')
@php
$data=true;
@endphp
<section class="d-flex justify-content-center py-3">
    <!--Print Larvel Data-->
    <h1 style="text-align: center"> Welcome To {{$title}}</h1>
</section>
<section class="d-flex justify-content-center py-3">
    <!--if...else statment-->
    <div style="text-align:center">
        @if ($data === true)
        We are the students of "Kakkhopath" !
        @elseif ($data === false)
        We are not the students of "Kakkhopath" !
        @else
        Welcome To "Kakkhopath" !
        @endif
    </div>
</section>
<section class="d-flex justify-content-center py-3">
    <!--isset-->
    <div style="text-align:center">
        @isset($data)
        Kakkhopath is good institute for online learning
        @endisset
    </div>
</section>

<section class="d-flex justify-content-center py-3">
    <!--Empty -->
    <div style="text-align:center">
        @isset($data)
        Kakkhopath is good institute for online learning
        @endisset
    </div>
</section>

@endsection