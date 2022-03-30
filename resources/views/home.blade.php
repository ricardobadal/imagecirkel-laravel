@extends('layouts.app')

@section('content')
@section('title', 'Welcome')
<p class="welcometext display-6 text-center">Welcome to the weirdest shop ever!!</p>
<div class="maincontainer">
    <div class="row justify-content-center">
        <div class="col-4 text-center display-5">
            <a href="/products"><img src="/images/homepage_image.png" alt="">Enter... err... <br>the... Dragon?</a>
        </div>
    </div>
</div>

@endsection