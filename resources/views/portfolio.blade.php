@extends('layouts.base')

@section('title', "CAM-Manufactured Examples of the Quality Work at Buck's CNC Machining")
@section('keywords', "cnc milling, cnc lathe, machining portfolio, cnc projects, machinist, cam")
@section('description', 'View examples of our CAM-manufactured parts milled and lathed from aluminum, steel, copper, and more')

@section('hero-content')
    <div class="hero-cta">
        <h1 class="hero-main-line">
            <span>S</span><span>K</span><span>I</span><span>L</span><span>L</span>
        </h1>
        <h4 class="hero-secondary-line">
            <span>SPEAKS</span>&nbsp;
            <span>FOR</span>&nbsp;
            <span>ITSELF</span>
        </h4>
        <p>See what our other customers are talking about. The quality of our work shows through in each and every one of our CNC projects.</p>
    </div>
@endsection

@section('body-content')
    <div class="portfolio-grid">
        <div class="polaroid" id="polaroid-01"></div>
        <div class="polaroid" id="polaroid-02"></div>
        <div class="polaroid" id="polaroid-03"></div>
        <div class="polaroid" id="polaroid-04"></div>
        <div class="polaroid" id="polaroid-05"></div>
        <div class="polaroid" id="polaroid-06"></div>
        <div class="polaroid" id="polaroid-07"></div>
        <div class="polaroid" id="polaroid-08"></div>
        <div class="polaroid" id="polaroid-09"></div>
        <div class="polaroid" id="polaroid-10"></div>
        <div class="polaroid" id="polaroid-12"></div>
        <div class="polaroid" id="polaroid-13"></div>
        <div class="polaroid" id="polaroid-14"></div>
        <div class="polaroid" id="polaroid-15"></div>
        <div class="polaroid" id="polaroid-16"></div>
        <div class="polaroid" id="polaroid-17"></div>
        <div class="polaroid" id="polaroid-18"></div>
        <div class="polaroid" id="polaroid-19"></div>
        <div class="polaroid" id="polaroid-20"></div>
        <div class="polaroid" id="polaroid-21"></div>
        <div class="polaroid" id="polaroid-22"></div>
        <div class="polaroid" id="polaroid-23"></div>
        <div class="polaroid" id="polaroid-24"></div>
        <div class="polaroid" id="polaroid-25"></div>
        <div class="polaroid" id="polaroid-26"></div>
        <div class="polaroid" id="polaroid-27"></div>
        <div class="polaroid" id="polaroid-28"></div>
        <div class="polaroid" id="polaroid-29"></div>
        <div class="polaroid" id="polaroid-30"></div>
        <div class="polaroid" id="polaroid-31"></div>
        <div class="polaroid" id="polaroid-32"></div>
        <div class="polaroid" id="polaroid-33"></div>
        <div class="polaroid" id="polaroid-34"></div>
        <div class="polaroid" id="polaroid-35"></div>
    </div>
    <div class="modal-bg">
        <div class="icon modal-close">
            <i class="fas fa-window-close"></i>
        </div>
        <div class="icon arrow arrow-left">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="icon arrow arrow-right">
            <i class="fas fa-chevron-right"></i>
        </div>
        <div class="photo"></div>
    </div>
@endsection

@section('js')
    @parent
    <script src="{{ asset('js/portfolio.js') }}"></script>
@endsection
