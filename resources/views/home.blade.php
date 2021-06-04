@extends('layouts.base')

@section('title', "Buck's CNC Machining")
@section('keywords', "contract manufacturing, custom prototyping, cnc")

@section('hero-content')
    <div class="home-hero-logo text-center">
        <picture>
            <source media="(max-width:1000px)" srcset="{{ asset('assets/images/bucks-cnc-fc-logo-175w.png') }}">
            <img src="{{ asset('assets/images/bucks-cnc-fc-logo.png') }}" alt="Buck's CNC Machining Logo" />
        </picture>
    </div>
    <div class="hero-cta home-hero-cta">
        <div class="cta-wrapper">
            <h1 class="hero-main-line">
                <span>E</span><span>X</span><span>P</span><span>A</span><span>N</span><span>D</span>
            </h1>
            <h4 class="hero-secondary-line">
                <span>YOUR</span>&nbsp;
                <span>PRODUCTION</span>&nbsp;
                <span>CAPABILITIES</span>
            </h4>
            <p>Do you need parts machined to tighter tolerances but don’t have room in the budget for state-of-the-art CNC equipment?</p>
            <p>Are you engineering a new part and need a working prototype before taking it into production?</p>
            <p class="text-center"><a href="{{ route('quote.index') }}" class="button color-secondary">REQUEST A QUOTE</a></p>
        </div>
    </div>
@endsection

@section('body-content')
<h1 class="body-content-title">HERE'S WHAT WE CAN DO FOR YOU</h1>
<div class="body-main-content">
    <div class="contract-manufacturing-column main-content-column">
        <h2 class="body-content-title">CONTRACT MANUFACTURING</h2>

        <div class="content-image">
            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Purus gravida quis blandit turpis cursus in. Morbi tincidunt ornare massa eget egestas purus viverra. Ornare arcu odio ut
            sem nulla pharetra diam. Ac orci phasellus egestas tellus rutrum. Dignissim cras tincidunt lobortis feugiat vivamus.</p>
            <picture>
                <source media="(max-width:425px)" srcset="{{ asset('assets/images/large-quantity-production-img-116w.png') }}">
                <source media="(max-width:1000px)" srcset="{{ asset('assets/images/large-quantity-production-img-194w.png') }}">
                <source media="(max-width:1465px)" srcset="{{ asset('assets/images/large-quantity-production-img-300w.png') }}">
                <img class="horizontal-center" src="{{ asset('assets/images/large-quantity-production-img.png') }}" alt="Contract manufacturing for expanding the bandwidth of your factory" />
            </picture>
        </div>
    </div>
    <div class="prototype-column main-content-column">
        <h2 class="body-content-title">CUSTOM PROTOTYPING</h2>

        <div class="content-image">
            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Purus gravida quis blandit turpis cursus in. Morbi tincidunt ornare massa eget egestas purus viverra. Ornare arcu odio ut
            sem nulla pharetra diam. Ac orci phasellus egestas tellus rutrum. Dignissim cras tincidunt lobortis feugiat vivamus.</p>
            <picture>
                <source media="(max-width:425px" srcset="{{ asset('assets/images/custom-prototype-img-146w.png') }}">
                <source media="(max-width:1000px" srcset="{{ asset('assets/images/custom-prototype-img-244w.png') }}">
                <source media="(max-width:1465px)" srcset="{{ asset('assets/images/custom-prototype-img-300w.png') }}">
                <img class="horizontal-center" src="{{ asset('assets/images/custom-prototype-img.png') }}" alt="Custom prototypes made to your specifications" />
            </picture>
        </div>
    </div>
</div>
<div class="body-content-tagline">
    <h2 class="body-content-tagline">WHETHER IT'S ONE CUSTOM PART OR 1,000</h2>
    <h1 class="body-content-tagline">WE CAN HANDLE IT</h1>
</div>
@endsection
