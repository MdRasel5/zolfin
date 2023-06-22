@extends('layout/common')

@section('contents')

    <!-- Hero  -->
        @include('components/home/hero-slider')
    <!-- Hero End -->

    <!-- Project Showcase -->
        @include('components/home/showcase')
    <!-- Project Showcase -->

    <!-- About  -->
        @include('components/home/home-about')
    <!-- About End -->

    <!-- Service  -->
        @include('components/home/home-services')
    <!-- Service End -->

    <!-- Project  -->
        @include('components/home/home-projects')
    <!-- Project End -->

    <!-- Pricing  -->
        @include('components/home/home-pricing')
    <!-- Pricing End -->

    <!-- Counter UP -->
        @include('components/home/counter-up')
    <!-- Counter UP End -->

    <!-- Testimonial  -->
        @include('components/home/testimonial')
    <!-- Testimonial End -->

    <!-- Process  -->
        @include('components/home/process')
    <!-- Process End -->

    <!-- News  -->
        @include('components/home/home-news')
    <!-- News End -->

    <!-- CTA  -->
        @include('components/home/home-cta')
    <!-- CTA End -->

@endsection('contents')