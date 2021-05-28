<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="keywords" content="@yield('keywords')" />
        <meta name="description" content="@yield('description')" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}" />
        <script src="https://kit.fontawesome.com/3207795e71.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="body">
            <div class="hero {{ $pageIdentifier ?? 'hp' }}">
                <nav>
                    <div class="nav-logo">
                        <a href="{{ route('home') }}">
                            <picture>
                                <source media="(max-width:1000px)" srcset="{{ asset('assets/images/bucks-cnc-logo-138w.gif') }}">
                                <img src="assets/images/bucks-cnc-logo.gif" alt="Buck's CNC Machining Logo" />
                            </picture>
                        </a>
                    </div>
                    <div class="nav-links">
                        <i class="fa fa-times"></i>
                        <ul>
                            <li><a href="{{ route('portfolio') }}">PORTFOLIO</a></li>
                            <li><a href="{{ route('machines') }}">MEET THE MACHINES</a></li>
                            <li><a href="{{ route('quote.index') }}">CONTACT</a></li>
                        </ul>
                    </div>
                    <div class="nav-menu">
                        <i class="fa fa-bars"></i>
                    </div>
                </nav>
                <div class="hero-content horizontal-center">
                    @yield('hero-content')
                </div>
            </div>
            <div class="body-content">
                <div class="body-wrapper">
                    @yield('body-content')
                </div>
            </div>
            <div class="footer">
                <div class="content-columns">
                    <div class="social-media">
                        <p>
                            <a href="https://www.facebook.com/buckscnc" class="social-icon" target="_blank">
                                <i class="fa fa-facebook-square"></i>
                                <span class="social-link">facebook.com/buckscnc</span>
                            </a>
                        </p>
                        <p>
                            <a href="https://twitter.com/CncBuck" class="social-icon" target="_blank">
                                <i class="fa fa-twitter"></i>
                                <span class="social-link">twitter.com/CncBuck</span>
                            </a>
                        </p>
                        <p>
                            <a href="https://www.instagram.com/buckscnc/" class="social-icon" target="_blank">
                                <i class="fa fa-instagram"></i>
                                <span class="social-link">instagram.com/buckscnc</span>
                            </a>
                        </p>
                        <p>
                            <a href="tel:+12082192737" class="social-icon">
                                <i class="fa fa-phone-square"></i>
                                <span class="social-link">+1 208.219.2737</span>
                            </a>
                        </p>
                    </div>
                    <div class="contact-form">
                        <h2>CONTACT US</h2>
                        <form action="{{ route('email.send') }}" id="footer-contact" method="post">
                            <label for="first_name" class="form-label">FIRST NAME</label>
                            <input type="text" class="form-control" name="first_name" maxlength="50" required>

                            <label for="last_name" class="form-label">LAST NAME</label>
                            <input type="text" class="form-control" name="last_name" maxlength="60" required>

                            <label for="email_address" class="form-label">EMAIL ADDRESS</label>
                            <input type="email" class="form-control" name="email_address" maxlength="125" required>

                            <label for="message" class="form-label">MESSAGE</label>
                            <textarea class="form-control" name="message"></textarea>
                            @csrf
                            <input type="submit" class="button color-primary" value="SEND">
                        </form>
                    </div>
                </div>
                <p class="copyright">&copy; Buck's CNC Machining {{ date('Y') > 2021 ? '2021 - ' . date('Y') : date('Y') }}. All Rights Reserved.</p>
            </div>
            <div class="contact-modal text-center">
                <p>Sending your message.</p>
                <div class="spinner-border color-primary" role="status"></div>
                <p>Please wait</p>
            </div>
        </div>
        @section('js')
        <script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="{{ asset('js/common.js') }}"></script>
        @show
    </body>
</html>
