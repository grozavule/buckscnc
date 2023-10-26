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
            <p class="text-left">
                Do you need more bandwidth in your machine shop? Do you need to manufacture intricate parts but don't
                have the equipment? That's what Buck's CNC Machining is here for! We've saved our customers thousands
                of dollars in labor and equipment costs.
            </p>
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
            <p class="text-left">
                Are you testing new designs for a brand new engineering project and need proofs of concept? Do you need
                help transforming your engineering designs into a working part before creating having it cast? Buck's CNC
                Machining can help with that, too!
            </p>
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
