<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('public/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/main.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js?ver=6.2.2"
        id="particle-js-js"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>@yield('title')</title>
</head>

<body class="main-body">
    <header>
        <div class="container">
            <div class="top-bar">
                <div class="top-child-lang">
                    <ul>
                        <li class="dropdown">
                            <a style="cursor: pointer;" class="dropdown-btn">@lang('messages.Language')<i
                                    class="fa-solid fa-angle-down"></i></a>
                            <div class="dropdown-content-1">
                                <a href="locale/en">@lang('messages.English')</a>
                                <a href="locale/gr">@lang('messages.German')</a>
                                <a href="locale/sp">@lang('messages.Spanish')</a>
                                <a href="locale/fr">@lang('messages.French')</a>
                            </div>
                        </li>


                        <li><a href="#">@lang('messages.Support')</a></li>
                    </ul>
                </div>
                <div class="top-subpage">
                    <ul>
                        <li><a href="{{ route('faq') }}">@lang('messages.Faq')</a></li>
                        <li><a href="{{ route('blog') }}">@lang('messages.Blog')</a></li>
                    </ul>
                </div>
            </div>
            <nav class="navbar-main">
                <div class="row" style="align-items: center;">
                    <div class="col-lg-8 col-md-2 col-4 with-50">
                        <div class="nav-links-main">

                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('public/assets/images/iatify png.png') }}"
                                        class="nor-logo" alt="logo">
                                    <img src="{{ asset('public/assets/images/iatify white.png') }}" class="dark-logo"
                                        alt="White logo"></a>
                            </div>
                            <div class="nav-links d-lg-block d-none">
                                <ul>
                                    <li class="dropdown">
                                        <a style="cursor: pointer;" class="dropdown-btn">@lang('messages.Feature') <i
                                                class="fa-solid fa-angle-down"></i></a>
                                        <div class="dropdown-content">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="future">
                                                        <h6><span>@lang('messages.The future of AI')</span>
                                                            <a href="{{ route('AiGenerator') }}"
                                                                class="d-flex align-items-center mt-2">
                                                                <div class="future-content mt-2">
                                                                    <h5>@lang('messages.AI Generator')</h5>
                                                                    <p>@lang('messages.Generate texte, images code, chat, and more')</p>
                                                                </div>
                                                                <div class="future-icon">
                                                                    <i class="fa-solid fa-chevron-right"></i>
                                                                </div>
                                                            </a>
                                                            <a href="{{ route('CustomizeChatbot') }}"
                                                                class="d-flex align-items-center mt-2">
                                                                <div class="future-content mt-2">
                                                                    <h5>@lang('messages.Customize your Chatbot')</h5>
                                                                    <p>@lang('messages.Train it on your own data (website, PDF, text, or Q&A) to make your AI content exclusive.')</p>
                                                                </div>
                                                                <div class="future-icon">
                                                                    <i class="fa-solid fa-chevron-right"></i>
                                                                </div>
                                                            </a>
                                                            <a href="{{ route('AIFIleChatAIVison') }}"
                                                                class="d-flex align-items-center mt-2">
                                                                <div class="future-content mt-2">
                                                                    <h5>@lang('messages.AI File Chat & AI Vison')</h5>
                                                                    <p>@lang('messages.Easily upload a PDF, extract specific information, key insights, or summarize the entire document.')</p>
                                                                </div>
                                                                <div class="future-icon">
                                                                    <i class="fa-solid fa-chevron-right"></i>
                                                                </div>
                                                            </a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="future">
                                                        <h6><span>@lang('messages.Create and share everywhere')</span>
                                                            <a href="{{ route('AIWriter') }}"
                                                                class="d-flex align-items-center mt-2 p-0 ">
                                                                <div class="future-content mt-2">
                                                                    <h5>@lang('messages.AI Writer')</h5>
                                                                    <p>@lang('messages.Your all-in-one solution for text generation and AI-powered copywriting assistance.')
                                                                    </p>
                                                                </div>
                                                                <div class="future-icon">
                                                                    <i class="fa-solid fa-chevron-right"></i>
                                                                </div>
                                                            </a>
                                                            <a href="{{ route('BrandVoice') }}"
                                                                class="d-flex align-items-center mt-2 p-0 ">
                                                                <div class="future-content mt-2">
                                                                    <h5>@lang('messages.Brand Voice')</h5>
                                                                    <p>@lang('messages.Craft tailored AI content unique to your brand, minimizing repetitive company introductions.')</p>
                                                                </div>
                                                                <div class="future-icon">
                                                                    <i class="fa-solid fa-chevron-right"></i>
                                                                </div>
                                                            </a>
                                                            <a href="{{ route('AiSocialMedia') }}"
                                                                class="d-flex align-items-center mt-2 p-0 ">
                                                                <div class="future-content mt-2">
                                                                    <h5>@lang('messages.AI Social Media and Scheduled Post')</h5>
                                                                    <p>@lang('messages.Streamline your social media strategy: Generate and schedule posts effortlessly with AI-driven content management.')</p>
                                                                </div>
                                                                <div class="future-icon">
                                                                    <i class="fa-solid fa-chevron-right"></i>
                                                                </div>
                                                            </a>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="voice">
                                                        <h6><span>@lang('messages.No need to pay for a voice')</span>
                                                            <a href="{{ route('AISpeech') }}"
                                                                class="d-flex align-items-center mt-1 p-0">
                                                                <div class="voice-content mt-2">
                                                                    <h5>@lang('messages.AI Speech To Text')</h5>
                                                                    <p>@lang('messages.Elevate your voice cloning experience with GPT-4 AI-powered Speech-to-Text technology.')</p>
                                                                </div>
                                                                <div class="voice-icon">
                                                                    <i class="fa-solid fa-chevron-right"></i>
                                                                </div>
                                                            </a>
                                                            <a href="{{ route('AiVoiceover') }}"
                                                                class="d-flex align-items-center mt-1 p-0">
                                                                <div class="voice-content mt-2">
                                                                    <h5>@lang('messages.AI Voiceover with Elevenlabs & Azure')</h5>
                                                                    <p>@lang('messages.Create Amazing AI-Generated Text to Speech with IAtify.')</p>
                                                                </div>
                                                                <div class="voice-icon">
                                                                    <i class="fa-solid fa-chevron-right"></i>
                                                                </div>
                                                            </a>
                                                            <a href="{{ route('AiVoiceInstead') }}"
                                                                class="d-flex align-items-center mt-1 p-0">
                                                                <div class="voice-content mt-2">
                                                                    <h5>@lang('messages.Clone your voice with Elevenlabs & Azure')</h5>
                                                                    <p>@lang("messages.Transform your audio experience with Elevenlabs' cutting-edge technology, enabling you to effortlessly replicate your voice in stunning detail.")</p>
                                                                </div>
                                                                <div class="voice-icon">
                                                                    <i class="fa-solid fa-chevron-right"></i>
                                                                </div>
                                                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    {{-- <li class="dropdown">
                                        <a href="#" class="dropdown-btn">Case Studies<i
                                                class="fa-solid fa-angle-down"></i></a>
                                        <div class="dropdown-content-1">
                                            <a href="#">Sublink 1</a>
                                            <a href="#">Sublink 2</a>
                                            <a href="#">Sublink 3</a>
                                        </div>
                                    </li> --}}
                                    <li><a href="{{ route('pricing') }}">@lang('messages.Pricing')</a></li>
                                    <li><a href="{{ route('contact') }}">@lang('messages.Contact')</a></li>
                                    <li><a href="{{ route('about-us') }}">@lang('messages.About us')</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-8 with-50">
                        <div class="nav-btn-main">
                            <div class="nav-buttons  d-lg-block d-md-block d-none">
                                <a href="#" class="get-demo">@lang('messages.Get a demo')</a>
                                <a href="#" class="start-trial">@lang('messages.Start your free trail')</a>
                            </div>
                            <div class="open-btn d-lg-none d-block" onclick="ToggleMenu()">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="mobile_menu">
                <div class="mobile_head">
                    <div class="logo">
                        <img src="public/assets/images/images/iatify png.png" alt="Logo" />
                    </div>
                    <div class="mobile_menu_btn">
                        <div class="demo">
                            <a href="#">@lang('messages.Get a Demo')</a>
                        </div>
                        <div class="start">
                            <a href="#">@lang('messages.Start your free trial')</a>
                        </div>
                        <div class="close" onclick="CloseMenu()">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                </div>
                <div class="mobile_link">
                    <ul>
                        <li>
                            <div class="link">
                                <a href="{{ route('home') }}">@lang('messages.Home')</a>
                            </div>
                        </li>
                        <li>
                            <div class="link">
                                <a href="#" onclick="MobileDropdown(event)">@lang('messages.Features')</a>
                                <div class="mobile_dropdown">
                                    <div class="dropdown_links" onclick="innerDropdown(event)">
                                        <p>@lang('messages.The future of AI')</p>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                    <div class="inner_dropdown">
                                        <a href="{{ route('AiGenerator') }}">@lang('messages.AI Generator')</a>
                                        <a href="{{ route('CustomizeChatbot') }}">@lang('messages.Customize your Chatbot')</a>
                                        <a href="{{ route('AIFIleChatAIVison') }}">@lang('messages.AI File Chat & AI Vision')</a>
                                    </div>
                                    <div class="dropdown_links" onclick="innerDropdown(event)">
                                        <p>@lang('messages.Create and share everywhere')</p>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                    <div class="inner_dropdown">
                                        <a href="{{ route('AIWriter') }}">@lang('messages.AI Writer')</a>
                                        <a href="{{ route('BrandVoice') }}">@lang('messages.Brand Voice')</a>
                                        <a href="{{ route('AiSocialMedia') }}">@lang('messages.AI Social Media and Scheduled Post')</a>
                                    </div>
                                    <div class="dropdown_links" onclick="innerDropdown(event)">
                                        <p>@lang('messages.No need to pay for a voice')</p>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                    <div class="inner_dropdown">
                                        <a href="{{ route('AISpeech') }}">@lang('messages.AI Speech To Text')</a>
                                        <a href="{{ route('AiVoiceover') }}">@lang('messages.AI Voiceover with Elevenlabs & Azure')</a>
                                        <a href="{{ route('AiVoiceInstead') }}">@lang('messages.Clone your voice with Elevenlabs & Azure')</a>
                                    </div>
                                </div>
                            </div>
                            <div class="arrow_icon">
                                <i class="fa-solid fa-angle-down"></i>
                            </div>
                        </li>
                        <li>
                            <div class="link">
                                <a href="{{ route('pricing') }}">@lang('messages.Pricing')</a>
                            </div>
                        </li>
                        <li>
                            <div class="link">
                                <a href="{{ route('faq') }}">@lang('messages.Faq')</a>
                            </div>
                        </li>
                        <li>
                            <div class="link">
                                <a href="{{ route('about-us') }}">@lang('messages.About us')</a>
                            </div>
                        </li>
                        <li>
                            <div class="link">
                                <a href="{{ route('contact') }}">@lang('messages.Contact')</a>
                            </div>
                        </li>
                        <li>
                            <div class="link">
                                <a href="#" onclick="MobileDropdown(event)">@lang('messages.Language')</a>
                                <div class="mobile_dropdown mobile_dropdown_language">
                                    <p><a href="locale/en">@lang('messages.English')</a></p>
                                    <p><a href="locale/gr">@lang('messages.German')</a></p>
                                    <p><a href="locale/sp">@lang('messages.Spanish')</a></p>
                                    <p><a href="locale/fr">@lang('messages.French')</a></p>
                                </div>
                            </div>
                            <div class="arrow_icon">
                                <i class="fa-solid fa-angle-down"></i>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


    @yield('content')

    <!-- faq section end -->
    <footer class="footer-sec">
        <div class="container">
            <div class="footer-head">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('public/assets/images/iatify png.png') }}"
                            class="nor-logo" alt="logo">
                        <img src="{{ asset('public/assets/images/iatify white.png') }}" class="dark-logo"
                            alt="White logo"></a>
                </div>
            </div>
            <div class="footer-links-main">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="footer-column">
                            <ul>@lang('messages.About iAtify')
                                <li><a href="">@lang('messages.Company Overview')</a></li>
                                <li><a href="">@lang('messages.Careers')</a></li>
                                <li><a href="">@lang('messages.Press & Media')</a></li>
                                <li><a href="">@lang('messages.Testimonials')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6">
                        <div class="footer-column">
                            <ul>@lang('messages.Resources')
                                <li><a href="{{ route('blog') }}">@lang('messages.Blog')</a></li>
                                <li><a href="">@lang('messages.Help Center')</a></li>
                                <li><a href="">@lang('messages.Webinars & Events')</a></li>
                                <li><a href="">@lang('messages.Case Studies')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 pad-mob">
                        <div class="footer-column">
                            <ul>@lang('messages.Support & Contact')
                                <li><a href="{{ route('contact') }}">@lang('messages.Contact Us')</a></li>
                                <li><a href="{{ route('CookiePolicy') }}">@lang('messages.Cookie Policy')</a></li>
                                <li><a href="{{ route('PrivacyPolicy') }}">@lang('messages.Privacy Policy')</a></li>
                                <li><a href="{{ route('TermandCondition') }}">@lang('messages.Term and Condition')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-6 pad-mob">
                        <div class="socail-link">
                            <ul>@lang('messages.Connect')
                                <li><a href=""><i class="fa-brands fa-facebook"></i>&nbsp;
                                        @lang('messages.Facebook')</a></li>
                                <li><a href=""><i class="fa-brands fa-square-instagram"></i>&nbsp;
                                        @lang('messages.Instagram')</a></li>
                                <li><a href=""><i class="fa-brands fa-x-twitter"></i>&nbsp;
                                        @lang('messages.Twitter / X')</a>
                                </li>
                                <li><a href=""><i class="fa-brands fa-linkedin"></i>&nbsp;
                                        @lang('messages.Linkedin')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-rights-main">
                <div class="copy-right">
                    <a href="">©2024 IAtify  All Rights Reserved. Develop by <a href="https://fronxsolutions.com" target="blank">Fronxsoltions</a></a>
                </div>
                <div class="terms">
                    <a href="{{ route('TermandCondition') }}">@lang('messages.Term of use')</a>
                    <a href="{{ route('CookiePolicy') }}">@lang('messages.Privacy policy')</a>
                    <a href="">@lang('messages.Security')</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- div theme color change Stert -->
    <div class="theme-color-wrp">
        <div class="theme-icon-main">
            <i class="fa-solid fa-moon"></i>
            <i class="fa-solid fa-sun"></i>
        </div>
    </div>
    <!-- div theme color change Stert -->

    <script src="{{ url('public/assets/js/bootstrap.js') }}"></script>
    <script src="{{ url('public/assets/js/index.js') }}"></script>
    <script src="{{ url('public/assets/js/FAQ.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Function to toggle dark mode

        // Function to toggle dark mode
        function toggleDarkMode() {
            if ($('.main-body').hasClass('dark-mode')) {
                $('.nor-logo').css("display", "block");
                $('.dark-logo').css("display", "none");
                $('.main-body').removeClass('dark-mode');
                $('.sponser-logo-main').css("display", "flex")
                $('.sponser-logo-dark').css("display", "none");

                localStorage.setItem('darkMode', 'false');
            } else {
                $('.nor-logo').css("display", "none");
                $('.dark-logo').css("display", "block");
                $('.main-body').addClass('dark-mode');
                $('.sponser-logo-main').css("display", "none")
                $('.sponser-logo-dark').css("display", "flex");
                localStorage.setItem('darkMode', 'true');
            }
        }

        // Check the local storage and apply dark mode if needed
        $(document).ready(function() {
            if (localStorage.getItem('darkMode') === 'true') {
                $('.main-body').addClass('dark-mode');
                $('.nor-logo').css("display", "none");
                $('.dark-logo').css("display", "block");
            } else {
                $('.nor-logo').css("display", "block");
                $('.dark-logo').css("display", "none");
            }
        });

        // Toggle dark mode on button click
        $(document).on("click", '.theme-icon-main', function() {
            toggleDarkMode();
        });

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            spaceBetween: 10,
            freeMode: true,
            autoplay: {
                delay: 2000,
                pauseOnMouseEnter: true
            },
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                991: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1210: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },

            }
        });
    </script>
    <script>
        function PriceChange() {
            let Professional = document.querySelector('#Professional');
            let basic = document.querySelector('#basic');
            let Advanced = document.querySelector('#Advanced');
            let Enterprise = document.querySelector('#Enterprise');
            let isChecked = document.querySelector('#priceChangeCheckbox').checked;

            if (isChecked) {
                Professional.innerText = "$ 336";
                basic.innerText = "$ 182";
                Advanced.innerText = "$ 470";
                Enterprise.innerText = "$ 1526";
            } else {
                Professional.innerText = "$ 35";
                basic.innerText = "$ 19";
                Advanced.innerText = "$ 49";
                Enterprise.innerText = "$ 159";
            }
        }
    </script>
</body>

</html>
