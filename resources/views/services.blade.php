{{-- Extend Template --}}
@extends('layouts.app')

{{-- Meta Description --}}
@section('meta-description')
Offering web design, Wordpress website customization, wordpress plugin development, laravel web apps and package development & website maintenance.
@endsection

{{-- Meta Keywords --}}
@section('meta-keywords')
laravel services, laravel solutions, wordpress services, wordpress solutions, web design services, web design solutions
@endsection

{{-- Browser Title --}}
@section('browser-title', 'Wordpress, Laravel & PHP Web Design & Development Services')

{{-- Current Page --}}
@section('current-page', 'services')

{{-- Page Title Caption --}}
@section('header-caption', "serving with diligence")

{{-- Page Title --}}
@section('header-title', "Web Design & Development Services")

{{-- Page Content --}}
@section('content')
    <div class="section">
        <div class="container flex flex-col">

            <!-- Website Solutions -->
            <div class="service-block">
                <div class="service-title">
                    <h3>Website Solutions</h3>
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="service-description">
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Static & Dynamic Website',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Responsive Web Design',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Search Engine Optimization',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'E-commerce Solutions',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Content Management System',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Web Applications',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Web Hosting & Domain Name Setup',
                            ])
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wordpress Services -->
            <div class="service-block">
                <div class="service-title">
                    <h3>Wordpress Solutions</h3>
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fab fa-wordpress"></i>
                    </div>
                    <div class="service-description">
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Custom Made Website',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Advance Website Customization',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Wordpress Installation',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Search Engine Optimization',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Website Migration',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Website Maintenance - Monitoring, Security, Backup & Upgrade',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'E-commerce Website',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Plugin Development',
                            ])
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-block">
                <div class="service-title">
                    <h3>Laravel Solutions</h3>
                </div>
                <div class="service-content">
                    <div class="service-icon">
                        <i class="fab fa-laravel"></i>
                    </div>
                    <div class="service-description">
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Custom Made Website',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Web Application Development',
                            ])
                        </div>
                        <div class="service-item">
                            @include('services.service-item', [
                                'content' => 'Package Development',
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
