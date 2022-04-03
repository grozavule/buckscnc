@extends('layouts.base')

@section('title', 'See the CNC Mills and Lathe that Manufacture Your CAD Designs')
@section('keywords', 'cnc mill, cnc lathe, CAD, CAM, manufacturing')
@section('description', 'Our CNC lathe and mills manufacture the highest quality machined parts from steel, aluminum, copper, and titanium')

@section('hero-content')
    <div class="hero-cta">
        <h1 class="hero-main-line">MEET</h1>
        <h4 class="hero-secondary-line">THE MACHINES</h4>
        <p>Quality CNC machining takes both a great machinist as well as a powerhouse machine</p>
        <p>We have it all so that you don't need to. Let us show you what we are capable of.</p>
    </div>
@endsection

@section('body-content')
    <div class="machine-container">
        <div class="machine-image">
            <picture>
                <source media="(max-width:650px)" srcset="{{ asset('assets/images/bucks-cnc-logo-99w.gif') }}">
                <source media="(max-width:1000px)" srcset="{{ asset('assets/images/bucks-cnc-logo-138w.gif') }}">
                <img src="assets/images/machines-lathe-825w.png" alt="Samsung SL25 ASY Lathe" />
            </picture>
        </div>
        <div class="machine-features">
            <h2 class="machine-name">2009 SAMSUNG SL25 ASY LATHE</h2>
            <div class="machine-featurettes"></div>
        </div>
    </div>

    <div class="machine-container">
        <div class="machine-image">
            <picture>
                <source media="(max-width:650px)" srcset="{{ asset('assets/images/bucks-cnc-logo-99w.gif') }}">
                <source media="(max-width:1000px)" srcset="{{ asset('assets/images/bucks-cnc-logo-138w.gif') }}">
                <img src="assets/images/machines-mill01-825w.png" alt="2016 HAAS VF2" />
            </picture>
        </div>
        <div class="machine-features">
            <h2 class="machine-name">2016 HAAS VF2</h2>
            <div class="machine-featurettes"></div>
        </div>
    </div>

    <div class="machine-container">
        <div class="machine-image">
            <picture>
                <source media="(max-width:650px)" srcset="{{ asset('assets/images/bucks-cnc-logo-99w.gif') }}">
                <source media="(max-width:1000px)" srcset="{{ asset('assets/images/bucks-cnc-logo-138w.gif') }}">
                <img src="assets/images/machines-mill02-825w.png" alt="2016 HAAS VF2 Superspeed" />
            </picture>
        </div>
        <div class="machine-features">
            <h2 class="machine-name">2016 HAAS VF2 SUPERSPEED</h2>
            <div class="machine-featurettes"></div>
        </div>
    </div>
@endsection

