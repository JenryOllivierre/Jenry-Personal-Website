{{-- Extend Template --}}
@extends('layouts.app')

{{-- Meta Description --}}
@section('meta-description')
A Web Developer & Designer who uses Wordpress, Laravel, Bootstrap, Tailwind CSS, PHP, Javascript, jQuery, HTML & CSS to make beautiful web applications.
@endsection

{{-- Meta Keywords --}}
@section('meta-keywords')
wordpress developer, php developer, laravel developer, bootstrap developer, tailwind css developer
@endsection

{{-- Browser Title --}}
@section('browser-title', 'About Jenry Ollivierre')
@section('browser-title-right', 'A Wordpress, Laravel & PHP Web Developer')

{{-- Current Page --}}
@section('current-page', 'about')

{{-- Page Title Caption --}}
@section('header-caption', "A never-say-never, Cricket loving coder")

{{-- Page Title --}}
@section('header-title', "Get To Know Me More")

{{-- Page Content --}}
@section('content')

    <!-- The Basics About Me -->
    <div class="section bg-white">
        <div class="container">
            <h3 class="section-heading text-center">The Basics About Me</h3>
            <div class="section-content mx-auto max-w-lg">
                <p>My name is Jenry Ollivierre, I'm a web developer from the Caribbean island of St. Vincent and the Grenadines. I work particularly with Wordpress and Laravel. Apart from Wordpress and Laravel, my tech stack mostly involves PHP, Html, CSS, Javascript, jQuery, MYSQL, Bootstrap and Tailwind CSS.</p>
                <p>I'm a husband to a wife that's beautiful inside and out. I love coding and spend a lot of time trying to be better at it. I'm a huge fan of Cricket. Cricket was probably my first love, maybe since the age of 5 or 6. I try to watch as much international Cricket as possible - it's not unusual to find me up at odd hours of the night watching games on the other side of the globe. I'm actively involved in playing Cricket as well - I usually play 20+ games a season!</p>
                <p>You can basically say I am a Cricket crazed, obsessed coder!</p>
            </div>
        </div>
    </div>
@endsection
