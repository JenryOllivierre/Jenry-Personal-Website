{{-- Extend Template --}}
@extends('layouts.app')

{{-- Meta Description --}}
@section('meta-description')
Contact me for your web development & design needs. Hire me to develop your Wordpress & Laravel websites and applications.
@endsection

{{-- Meta Keywords --}}
@section('meta-keywords')
hire wordpress developer, hire wordpress designer, hire laravel developer, hire php developer, hire web developer, hire remote web developer
@endsection

{{-- Browser Title --}}
@section('browser-title', 'Hire a Wordpress, Laravel & PHP Web Developer & Designer')

{{-- Current Page --}}
@section('current-page', 'contact')

{{-- Page Title Caption --}}
@section('header-caption', "I'm just a click away")

{{-- Page Title --}}
@section('header-title', "I'd Love To Hear From You")

{{-- Page Content --}}
@section('content')
    <div class="section bg-white">
        <div class="container">
            <form id="contact-form" class="max-w-md mx-auto rounded" method="post" action="{{ route('contact.post') }}">

                <!-- CSRF Field -->
                @csrf

                <!-- Name -->
                <div class="mb-8">
                    <label for="name" class="block text-grey-darker font-bold">Name</label>
                    <div class="pt-1">
                        <input class="form-input form-field" type="text" id="name" name="name" required>
                        <div class="form-error alert hidden" id="form-error-name"></div>
                    </div>
                </div>

                <!-- Email -->
                <div class="mb-8">
                    <label for="email" class="block text-grey-darker font-bold">Email Address</label>
                    <div class="pt-1">
                        <input class="form-input form-field" type="email" id="email" name="email" required>
                        <div class="form-error alert hidden" id="form-error-email"></div>
                    </div>
                </div>

                <!-- Message -->
                <div class="mb-4">
                    <label for="message" class="block text-grey-darker font-bold">Your Message</label>
                    <div class="pt-1">
                        <textarea class="h-64 form-input form-field" id="message" name="message" required></textarea>
                        <div class="form-error alert hidden" id="form-error-message"></div>
                    </div>
                </div>

                <!-- Form Message -->
                <div id="contact-form-message" class="alert hidden"></div>

                <!-- Submit Button -->
                <input type="submit" id="contact-form-submit" class="mt-2 btn btn-primary" value="Send Message">
            </form>
        </div>
    </div>
@endsection
