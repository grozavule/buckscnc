<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="keywords" content="@yield('keywords')" />
        <meta name="description" content="@yield('description')" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}" />
    </head>
    <body>
        <div class="hero {{ $pageIdentifier ?? 'hp' }}">
            <nav>
                <div class="nav-logo">
                    <picture>
                        <source media="(max-width:800px)" srcset="{{ asset('assets/images/bucks-cnc-logo-138w.gif') }}">
                        <img src="assets/images/bucks-cnc-logo.gif" alt="Buck's CNC Machining Logo" />
                    </picture>
                </div>
                <div class="nav-links">
                    <i class="fa fa-times"></i>
                    <ul>
                        <li><a href="#">PORTFOLIO</a></li>
                        <li><a href="#">MEET THE MACHINES</a></li>
                        <li><a href="#">CONTACT</a></li>
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
            @yield('body-content')
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
                    <form action="" method="post">
                        <label for="first_name" class="form-label">FIRST NAME</label>
                        <input type="text" class="form-control" name="first_name" maxlength="50" required>

                        <label for="last_name" class="form-label">LAST NAME</label>
                        <input type="text" class="form-control" name="last_name" maxlength="60" required>

                        <label for="email_address" class="form-label">EMAIL ADDRESS</label>
                        <input type="email" class="form-control" name="email_address" maxlength="125" required>

                        <label for="message" class="form-label">MESSAGE</label>
                        <textarea class="form-control" name="message"></textarea>

                        <input type="submit" class="button color-primary" value="SEND">
                    </form>
                </div>
            </div>
            <p class="copyright">&copy; Buck's CNC Machining {{ date('Y') > 2021 ? '2021 - ' . date('Y') : date('Y') }}. All Rights Reserved.</p>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
</html>
