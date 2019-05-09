@extends('layouts.app')

{{-- Meta Description --}}
@section('meta-description')
A Web Developer & Designer who uses Wordpress, Laravel, Bootstrap, Tailwind CSS, PHP, Javascript, jQuery, HTML & CSS to make beautiful web applications.
@endsection

{{-- Meta Keywords --}}
@section('meta-keywords')
web developer, web designer, wordpress developer, wordpress designer, wordpress plugin developer, laravel developer, bootstrap developer, tailwind css developer, front end developer, backend developer
@endsection

{{-- Browser Title --}}
@section('browser-title', 'Jenry Ollivierre')
@section('browser-title-right', 'Web Developer & Designer - Wordpress, Laravel, Bootstrap, Tailwind CSS')

{{-- Current Page --}}
@section('current-page', 'home')

{{-- Body id --}}
@section('body-id', 'home')

{{-- Page Title --}}
@section('header-title')

    <!-- Intro Text -->
    <div id="home-page-intro-text" class="hidden">
        <div id="home-page-intro-main-text">
            Web Developer & Designer
        </div>
        <div id="home-page-intro-secondary-text" class="italic text-lg font-normal">
            let's build and innovate.... together
        </div>
    </div>

    <!-- Social Media Links -->
    <ul id="home-page-intro-social-media" class="hidden list-reset flex flex-wrap justify-center text-3xl">
        <li class="home-page-social-media-item">
            <a href="https://www.facebook.com/jenry.ollivierre" target="_blank">
                <i class="fab fa-facebook-square"></i>
            </a>
        </li>
        <li class="home-page-social-media-item">
            <a href="https://twitter.com/nigeljenry" target="_blank">
                <i class="fab fa-twitter-square"></i>
            </a>
        </li>
        <li class="home-page-social-media-item">
            <a href="https://www.instagram.com/jenryollivierre" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
        </li>
        <li class="home-page-social-media-item">
            <a href="https://github.com/JenryOllivierre" target="_blank">
                <i class="fab fa-github-square"></i>
            </a>
        </li>
        <li class="home-page-social-media-item">
            <a href="skype:jenry@jenryollivierre.com?userinfo" target="_blank">
                <i class="fab fa-skype"></i>
            </a>
        </li>
    </ul>
@endsection

{{-- Page After Title Content --}}
@section('header-after-title')
    <div class="mt-16 w-full self-end content-end text-right">
        <a class="btn btn-action" href="{{ route('contact') }}">
            Hire Me
        </a>
    </div>
@endsection

{{-- Page Main Content --}}
@section('content')
    <div id="home-about-me" class="py-12 bg-grey-light text-grey-darkest">
        <div class="container">
            <div id="home-about-me-inner" class="lg:mx-auto lg:w-2/3">

                <!-- Profile Image -->
                <div class="text-center">
                    <img class="rounded-full w-48 h-48" src="{{ asset('images/jenry-profile-image.jpg') }}">
                </div>

                <!-- text -->
                <p class="mt-6 tracking-wide leading-tight-loose text-justify">Hey there, my name is Jenry Ollivierre. Welcome to my personal space on the web. I am a web developer from the beautiful Caribbean island of St. Vincent &amp; the Grenadines. I help individuals and businesses to establish an online presence. I pride myself on building clean, fast, uncomplicated and fully responsive websites. I believe in open source technology, so I occassionally publish a package or two to <a href="https://github.com/JenryOllivierre" target="_blank" alt="Jenry Ollivierre Github Profile">Github</a> to give back to the wonderful community that we all benefit so deeply from. My main tech stack is Wordpress, Laravel, PHP, Html, CSS, MYSQL, Bootstrap &amp; Tailwindcss - I dabble in Javascript &amp; jQuery when I want to get my sophistication on!</p>

                <!-- read more button -->
                <div class="text-right mt-8">
                    <a href="{{ route('about') }}" class="pill pill-primary">
                        More About Me
                    </a>
                </div>
            </div> <!-- #home-about-me-inner -->
        </div> <!-- .container -->
    </div> <!-- #home-about-me -->
@endsection
