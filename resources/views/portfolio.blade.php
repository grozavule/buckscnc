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
    </div>
@endsection

@section('content-sections')
    <div class="testimonial-container tpl grey">
        <div class="testimonial">
            <strong>Buck's CNC has been our go-to machine shop for over 6 years.</strong> Our company designs and builds high-end sensor and
            communication equipment for the Defense Industry. These parts require tight tolerance, and complicated geometries.
            Buck's CNC has always been up to the task and has never let us down. We continue to return to Buck's CNC for the
            <strong>top-notch quality</strong>, <strong>response time</strong> and <strong>customer service</strong>. <strong>We highly recommend using Buck's CNC for any of your
            machining needs.</strong>
            <p class="testimonial-author">Shaun Ferguson &mdash; Torrey Pines Logic</p>
        </div>
    </div>

    <div class="testimonial-container tko black">
        <div class="testimonial">
            We have had numerous occasions to hire Buck's CNC for various parts we have needed for our products.  We have found Drew to be honest,
            intelligent, and talented.  His precision to detail is great and his prices are fair. One of the biggest things that we appreciated is
            that when he said he would have a job done, he did. In the machining world, that is something that does not always happen.  If you need
            any machining work done or need numerous parts manufactured, I would strongly recommend his shop.
            <p class="testimonial-author">Tim Magagna &mdash; TKO Clamping Systems</p>
        </div>
    </div>

    <div class="testimonial-container razorback grey">
        <div class="testimonial">
            Working with Buck's CNC has been an incredible experience for our company. <strong>They are extremely professional and have always delivered
            our products when they said they would.</strong>  We've used them exclusively for over 6 years now. <strong>Our parts always come with the tolerances
            we spec'd.</strong> In addition to exceptional quality and professionalism, they are always looking for ways to help us save cost in parts design,
            whether it's with material selection or the physical part itself. They are always willing to help and it's rare, in our experience,
            to find a company that you can rely on 100 percent of the time. They make our business their business.
            <p class="testimonial-author">Jorden Campbell &mdash; Razorback Technologies</p>
        </div>
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
