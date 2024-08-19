@extends('include-layout.layout')
@section('title')

Home
    
@endsection

@section('content')

    <!-- banner section start  -->
    <section class="banner-sec">
        <div class="container">
            <div class="banner-main">
                <div class="head-main">
                    <img src="{{ url('assets/images/AI.svg') }}" alt="">
                    <p>@lang("messages.Write Your Desires, I Can Create Anything")</p>
                </div>
                <div class="banner-content">

                    <h1>@lang('messages.Transform your ideas into reality with our powerful tools')</h1>
                    <p>@lang('messages.From Intelligent Chatbots to Comprehensive Content Creation')</p>
                </div>
                <div class="banner-btn">
                    <a href="" class="start-trial">@lang('messages.Start your free trail')</a>
                    <a href="" class="watch-video"><i class="fa-solid fa-play"></i> &nbsp; @lang('messages.Watch video')</a>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end  -->
    <!-- video section start -->
    <section class="video-sec">
        <div class="container">
            <div class="video-main" style="background-image: url(assets/images/Ilustration\ graph\,\ icon.png);">
                <div class="play-sec">
                    <div class="play-btn">
                        <a href=""><i class="fa-solid fa-play"></i></a>
                    </div>
                    <div class="play-btn-content">
                        <h6>@lang('messages.Watch introduce video')</h6>
                        <p>5 mins &nbsp;<a href=""><span>Play video</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video section end -->
    <!-- sponser section start -->
    <section class="sponser-sec">
        <div class="container">
            <div class="sponser-desc">
                <p>@lang('messages.160,000+ customers in over 120 countries grow their businesses with IAtify')</p>
            </div>
            <div class="sponser-logo-main">
                <div class="company-name">
                    <img src="{{ url('assets/images/YouTube_Black.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img src="{{ url('assets/images/Bubble.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img src="{{ url('assets/images/Buffer.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img src="{{ url('assets/images/HubSpot.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img src="{{ url('assets/images/Linkedin Black.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img src="{{ url('assets/images/Loom.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img class="mailchimp-new" src="{{ url('assets/images/Mailchimp New.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img src="{{ url('assets/images/Microsoft Black.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img class="Sprout-Social" src="{{ url('assets/images/Sprout Social.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img src="{{ url('assets/images/Trello New.svg') }}" alt="">
                </div>
                
            </div>
            <div class="sponser-logo-dark">
                <div class="company-name">
                    <img src="{{ url('assets/images/YouTube_White.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img src="{{ url('assets/images/Bubble 1.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img src="{{ url('assets/images/Buffer 1.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img src="{{ url('assets/images/HubSpot 1.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img src="{{ url('assets/images/Linkedin Black 1.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img src="{{ url('assets/images/Loom 1.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img class="mailchimp-new" src="{{ url('assets/images/Mailchimp New 1.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img src="{{ url('assets/images/Microsoft Black 1.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img class="Sprout-Social" src="{{ url('assets/images/Sprout Social 1.svg') }}" alt="">
                </div>
                <div class="company-name">
                    <img src="{{ url('assets/images/Trello New 1.svg') }}" alt="">
                </div>
                
            </div>
        </div>
    </section>
    <!-- sponser section end -->
    <!-- our-strategies section start -->
    <!-- <section class="our-strategies">
        <div class="container d-flex flex-column align-items-center">
            <div class="startegies-main">
                <div class="strategies-head-main">
                    <img src="assets/images/AI.svg" alt="">
                    <p>Our startegies</p>
                </div>
                <div class="startegies-content">

                    <h1>Improve your Continuous Design Data workflow</h1>
                    <p>Specify helps you gain control of your design system across<br> teams and products.</p>
                </div>
                <div class="startegies-btn">
                    <a href="" class="demo">Get a demo</a>
                    <a href="" class="research-btn">Research</a>
                </div>
            </div>
            <div class="strategies-card-main">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="strategies-card">
                            <div class="strategies-card-head">
                                <img src="assets/images/server databases data code.png" alt="">
                                <p>AI-Driven Forecasts</p>
                            </div>
                            <div class="strategies-card-foter">
                                <p>Harness the unmatched power of artificial intelligence with iAtify. Dive deep into
                                    predictive analytics, anticipate market trends, and stay steps ahead of your
                                    competition. Make informed decisions backed by data-driven insights</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="strategies-card">
                            <div class="strategies-card-head">
                                <img src="assets/images/Vector.png" alt="">
                                <p>Connect & Streamline</p>
                            </div>
                            <div class="strategies-card-foter">
                                <p>
                                    iAtify seamlessly integrates with your favorite business tools, CRMs, and platforms.
                                    Experience a unified analytics platform that bridges the gaps in your data
                                    ecosystem, ensuring you have a holistic view of your operations
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="strategies-card">
                            <div class="strategies-card-head">
                                <img src="assets/images/Icon wrapper.png" alt="">
                                <p>Instant Insights</p>
                            </div>
                            <div class="strategies-card-foter">
                                <p>
                                    In the fast-paced world of business, every second counts. iAtify processes data in
                                    real-time, ensuring you're always working with the most up-to-date information.
                                    React to changes as they happen and pivot your strategies instantly.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section> -->
    <!-- our-strategies section end -->
    <!-- ai drevin banner section start -->
    <!-- <section class="ai-drevin-banner">
        <div class="container">
            <div class="drevin-banner-main" style="background-image: url(assets/images/ai\ drevin.png);">

            </div>
        </div>
    </section> -->
    <!-- ai drevin banner section end -->

    <!-- Features Section Start -->
    <section class="features-sec">
        <div class="container">
            <div class="content-wrp">
                <h1>@lang('messages.Key Features and Capabilities')</h1>
                <p>@lang('messages.IAtify helps you gain control of your design system across teams and products.')</p>
            </div>
            <div class="row lex-direc align-items-center" style="padding-top: 100px;">
                <div class="col-lg-6 features-col">
                    <div class="features-content-wrp">
                        <h1>@lang('messages.Unlock Your Social Media Potential with AI')</h1>
                        <p>@lang('messages.Powered by AI, our solution allows you to increase your popularity effortlessly. No more spending hours manually planning and publishing on each platform. Let our advanced technology handle this for you, ensuring you have a consistent and effective social media presence.')</p>
                    </div>
                </div>
                <div class="col-lg-6 features-col">
                    <div class="features-img-wrp">
                        <img src="{{ url('assets/images/function-img.jpg') }}" alt="">
                        <div class="features-pos-card">
                            <div class="pose-card">
                                <h4>@lang('messages.Your weekly activity')</h4>
                                <div class="row justify-content-center">
                                    <div class="col-lg-3 col-md-3 col-3 p-0">
                                        <div class="activity-detals">
                                            <span>Emails</span>
                                            <h6>17</h6>
                                            <div class="pera-div">
                                                <img src="{{ url('assets/images/pera-befor-img.png') }}"
                                                    style="width: 15px; height: 10px; margin-top: 8px;">
                                                <p>7</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-3 p-0">
                                        <div class="activity-detals">
                                            <span>Calls</span>
                                            <h6>25</h6>
                                            <div class="pera-div">
                                                <img src="{{ url('assets/images/pera-befor-img.png') }}"
                                                    style="width: 15px; height: 10px; margin-top: 8px;">
                                                <p>7</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-3 p-0">
                                        <div class="activity-detals">
                                            <span>Meetings</span>
                                            <h6>25</h6>
                                            <div class="pera-div">
                                                <img src="{{ url('assets/images/pera-befor-img.png') }}"
                                                    style="width: 15px; height: 10px; margin-top: 8px;">
                                                <p>7</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center" style="padding-top: 100px;">
                <div class="col-lg-6 features-col">
                    <div class="features-img-wrp-second">
                        <img src="{{ url('assets/images/function-second-img.jpg') }}" style="width: 100%; border-radius: 30px;">
                        <div class="pose-card-img">
                            <img src="{{ url('assets/images/funtion-content-img.svg') }}" style="border-radius: 0px;">
                        </div>
                        <div class="pose-card-img-second">
                            <img src="{{ url('assets/images/function-content-img-second.svg') }}"
                                style="width: 100%; border-radius: 0px;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 features-col">
                    <div class="features-content-wrp-second">
                        <h1>@lang('messages.Empower Your Forecasts with the Pulse of Real-Time Data')</h1>
                        <p>@lang('messages.Simply download a image, PDF, DOC, DOCX or CSV and let our GPT-4, Claude 3 and Gemini AIs analyze its contents. Search for specific information, extract key data or summarize the entire document in just a few clicks, providing an efficient and intuitive search experience.')</p>
                    </div>
                </div>
            </div>
            <div class="row lex-direc align-items-center" style="padding-top: 100px;">
                <div class="col-lg-6 features-col">
                    <div class="features-content-wrp-third">
                        <h1>@lang('messages.Customize your Chatbot with all Data (PDF, Text, Json, Excel, ... )')</h1>
                        <p>@lang('messages.Choose your source and let IAtify’s shape your GPT in seconds. Create unlimited, fully customized Chatbots, whether you need image generation experts, personal coaches, or nutritionists. Simply import your data from websites, PDFs, texts, or Q&A files. In just 30 seconds, your personalized Chatbot will be ready to provide all the necessary answers.')</p>
                    </div>
                </div>
                <div class="col-lg-6 features-col">
                    <div class="features-img-wrp-third">
                        <img src="{{ url('assets/images/function-third-img.jpg') }}">
                        <div class="features-pos-card-third">
                            <div class="pose-card-third">
                                <img src="{{ url('assets/images/funtion-content-img-third.svg') }}" style="border-radius: 0px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center" style="padding-top: 100px;">
                <div class="col-lg-6 features-col">
                    <div class="features-img-wrp-forth">
                        <img src="{{ url('assets/images/fuction-img-forth.jpg') }}" style="width: 100%; border-radius: 30px;">
                        <div class="pose-card-img">
                            <img src="{{ url('assets/images/fuction-content-forth-img.svg') }}" style="border-radius: 0px;">
                        </div>
                        <div class="pose-card-img-forth">
                            <img src="{{ url('assets/images/function-content-forth-second-img.svg') }}"
                                style="width: 100%; border-radius: 0px;">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 features-col">
                    <div class="features-content-wrp-forth">
                        <h1>@lang('messages.We analyze your voice and can clone it accurately')</h1>
                        <p>@lang('messages.Elevate your content effortlessly with Elevenlabs’ AI Voiceover. Our advanced technology enables you to craft compelling stories with clarity and emotion, ensuring seamless narration and natural-sounding voices. Explore the future of voice cloning through our revolutionary solution, transforming your voice into a lifelike digital version. Create personalized audio messages that captivate listeners across languages, ushering in a new era of vocal communication with our cutting-edge technology powered by Elevenlabs and Microsoft Azure.')</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section end -->

    <!-- our experince section start -->
    <section class="expereince-sec">
        <div class="expereince-content">
            <h1>@lang('messages.The IAtify Experience')</h1>
            <p>@lang("messages.At AItify, we take pride in offering a wide array of AI-powered tools for everyone. But don't just take our word for it. Hear directly from our satisfied users.")</p>
        </div>
        <!-- team mate cards -->
        <div class="teams-card-main">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <p>@lang('messages.This AI tool has transformed my YouTube scripts with personalized text. The Elevenlabs’ voice feature is fantastic!')</p>
                            </div>
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ url('assets/images/Avatar.png') }}" alt="">
                                </div>
                                <div class="team-member-detail">
                                    <h6>Lisa M.</h6>
                                    <p>@lang('messages.YouTube Creator')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <p>@lang('messages.Efficient AI suite for seamless LinkedIn post scheduling. RSS blog publishing is incredibly useful.')</p>
                            </div>
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ url('assets/images/Avatar.png') }}" alt="">
                                </div>
                                <div class="team-member-detail">
                                    <h6>Michael D.</h6>
                                    <p>@lang('messages.Blogger')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <p>@lang('messages.Personalized video content and automated X (Twitter) posts have streamlined my workflow. Plus, the ability to create custom chatbots with a simple web link is amazing!')</p>
                            </div>
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ url('assets/images/Avatar.png') }}" alt="">
                                </div>
                                <div class="team-member-detail">
                                    <h6>Emma P.</h6>
                                    <p>@lang('messages.Social Media Influencer')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <p>@lang('messages.Game-changer! Automated RSS blog posts and Elevenlabs’ voice generation add professionalism. The code generator works like a charm, helping me build software and resolve bugs.')</p>
                            </div>
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ url('assets/images/Avatar.png') }}" alt="">
                                </div>
                                <div class="team-member-detail">
                                    <h6>Carlos L.</h6>
                                    <p>@lang('messages.Digital Content Manager')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <p>@lang('messages.Managing content is now a breeze. Consistent LinkedIn posts and professional voices from Elevenlabs. Generating images with different models is a pleasure.')</p>
                            </div>
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ url('assets/images/Avatar.png') }}" alt="">
                                </div>
                                <div class="team-member-detail">
                                    <h6>Laura R.</h6>
                                    <p>@lang('messages.Instagram Influencer')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <p>@lang('messages.Streamlined my process with personalized video texts and automated LinkedIn posts. Their app is a masterclass in creating blog content with images in just three steps.')</p>
                            </div>
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ url('assets/images/Avatar.png') }}" alt="">
                                </div>
                                <div class="team-member-detail">
                                    <h6>James K.</h6>
                                    <p>@lang('messages.Marketing Consultant')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <p>@lang('messages.High-quality video production and effortless scheduling for LinkedIn make content creation simple. I can generate new content without repeating myself thanks to the Brain Voice feature.')</p>
                            </div>
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ url('assets/images/Avatar.png') }}" alt="">
                                </div>
                                <div class="team-member-detail">
                                    <h6>Mia J.</h6>
                                    <p>@lang('messages.Video Content Producer')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <p>@lang('messages.Personalized YouTube scripts and seamless RSS blog publishing are impressive. I successfully created a software solution using their code generator.')</p>
                            </div>
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ url('assets/images/Avatar.png') }}" alt="">
                                </div>
                                <div class="team-member-detail">
                                    <h6>Alex H.</h6>
                                    <p>@lang('messages.Content Marketing Specialist')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <p>@lang('messages.Automated LinkedIn scheduling and clear, professional voices from Elevenlabs save me time. Creating custom chatbots with a web link that adapts to my needs is fantastic.')</p>
                            </div>
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ url('assets/images/Avatar.png') }}" alt="">
                                </div>
                                <div class="team-member-detail">
                                    <h6>Sophia S.</h6>
                                    <p>@lang('messages.Content Strategist')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card">
                            <div class="team-content">
                                <p>@lang('messages.Essential tool! Superior video content and effortless LinkedIn scheduling. Their app automates blog content creation with custom images based on the content.')</p>
                            </div>
                            <div class="team-member">
                                <div class="team-member-image">
                                    <img src="{{ url('assets/images/Avatar.png') }}" alt="">
                                </div>
                                <div class="team-member-detail">
                                    <h6>Max T.</h6>
                                    <p>@lang('messages.Social Media Consultant')</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>

        </div>
    </section>

    <!-- <div class="team-card">
        <div class="team-content">
            <p>Project management is smoother with iAtify. Its dashboards provide a clear view of
                progress and areas of improvement.</p>
        </div>
        <div class="team-member">
            <div class="team-member-image">
                <img src="assets/images/Avatar.png" alt="">
            </div>
            <div class="team-member-detail">
                <h6>Nathan D. Hall</h6>
                <p>Project Lead</p>
            </div>
        </div>
    </div> -->

    <!-- experince banner section -->
    <section class="expereince-banner">
        <div class="container">
            <div class="expereince-banner-main"
                style="background-image: url(assets/images/Theme\ color\ overlay\ transition.png);">
                <div class="row ">
                    <div class="col-lg-7 with-100">
                        <div class="exper-banner-content">
                            <h1>@lang('messages.Experience the future of comprehensive AI-driven solutions with AItify')</h1>
                            <div class="exper-banner-content-btn">
                                <a href="">@lang('messages.Start your free trail') &nbsp;<img src="{{ url('assets/images/R icon.png') }}" alt=""></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 with-100">
                        <div class="row gy-4">
                            <div class="col-12 pe-5 ped-md">

                                <div class="exp-banner-card">
                                    <div class="exp-card-image">
                                        <img src="{{ url('assets/images/credit card cursor click.png') }}" alt="">
                                    </div>
                                    <div class="exp-card-content">
                                        <h6>@lang('messages.Instant Access')</h6>
                                        <p>@lang("messages.Begin exploring iAtify's full suite of features immediately")</p>
                                    </div>
                                </div>


                            </div>
                            <div class="col-12 pe-5 ped-md">

                                <div class="exp-banner-card">
                                    <div class="exp-card-image">
                                        <img src="{{ url('assets/images/Vector-icon.png') }}" alt="">
                                    </div>
                                    <div class="exp-card-content">
                                        <h6>@lang('messages.No Commitments')</h6>
                                        <p>@lang('messages.No credit card required, and you can cancel anytime')</p>
                                    </div>
                                </div>


                            </div>
                            <div class="col-12 pe-5 ped-md">

                                <div class="exp-banner-card">
                                    <div class="exp-card-image">
                                        <img src="{{ url('assets/images/Vector-icon2.png') }}" alt="">
                                    </div>
                                    <div class="exp-card-content">
                                        <h6>@lang('messages.Dedicated Support')</h6>
                                        <p>@lang('messages.Our team is here to assist you every step of the way during your trial.')</p>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- experince banner section end -->
    <!-- solution section start -->
    <section class="sloutions">
        <div class="container">
            <div class="solution-content-main">
                <div class="solution-head-main">
                    <img src="{{ url('assets/images/AI.svg') }}" alt="">
                    <p>@lang("messages.Applications")</p>
                </div>
                <div class="solution-content">
                    <h1>@lang('messages.Unleash Your Creativity with the AI Generator')</h1>
                    <p>@lang('messages.Unleash your creative potential with our AI Writer, your ultimate ally in text generation and copywriting assistance. With over +160 pre-configured templates specialized for specific tasks, and the ability to create bespoke templates, our platform is the ideal choice for any professional wanting to optimize their written content.')</p>
                </div>
            </div>
            <div class="solutions-card-main">
                <div class="row align-items-center g-4">
                    <div class="col-lg-4 col-md-6 co-sm-12 with-50 with-810">
                        <div class="solution-card">
                            <div class="solution-card-image">
                                <img src="{{ url('assets/images/solution-icon1.svg') }}" alt="">
                            </div>
                            <div class="solution-card-content">
                                <h6>@lang("messages.Predictive Power")</h6>
                                <p>
                                    @lang("messages.Harness IAtify advanced AI algorithms to anticipate market shifts, forecast trends, and make data-driven decisions that propel your business forward.")
                                </p>

                                <a href="">@lang("messages.Finance, Retail, E-commerce")</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 co-sm-12 with-50 with-810">
                        <div class="solution-card">
                            <div class="solution-card-image">
                                <img src="{{ url('assets/images/solution-icon2.svg') }}" alt="">
                            </div>
                            <div class="solution-card-content">
                                <h6>@lang("messages.Connect with Ease")</h6>
                                <p>
                                    @lang("messages.Integrate iAtify with your existing tools and platforms for a unified analytics experience. From CRMs to ERPs, we've got you covered.")
                                </p>
                                <a href="">@lang("messages.Tech, Healthcare, Manufacturing")</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 co-sm-12 with-50 with-810">
                        <div class="solution-card">
                            <div class="solution-card-image">
                                <img src="{{ url('assets/images/solution-icon3.svg') }}" alt="">
                            </div>
                            <div class="solution-card-content">
                                <h6>@lang("messages.Visualize Your Success")</h6>
                                <p>
                                   @lang("messages.Craft bespoke dashboards that resonate with your brand's goals. With drag-and-drop functionalities, visualizing your data has never been this easy.")
                                </p>

                                <a href="">@lang("messages.Marketing, Sales, Operations")</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 co-sm-12 with-50 with-810">
                        <div class="solution-card">
                            <div class="solution-card-image">
                                <img src="{{ url('assets/images/solution-icon4.svg') }}" alt="">
                            </div>
                            <div class="solution-card-content">
                                <h6>@lang("messages.Stay Updated, Always")</h6>
                                <p>
                                   @lang("messages.With AItify’s real-time data processing, you're always in the know. Make decisions based on the latest data and stay ahead of the curve.")
                                </p>

                                <a href="">@lang("messages.E-commerce, Logistics, Supply Chain")</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 co-sm-12 with-50 with-810">
                        <div class="solution-card">
                            <div class="solution-card-image">
                                <img src="{{ url('assets/images/solution-icon5.svg') }}" alt="">
                            </div>
                            <div class="solution-card-content">
                                <h6>@lang("messages.Your Data's Safe Haven")</h6>
                                <p>
                                   @lang("messages.Rest easy knowing your data is protected with AItify’s top-tier security protocols. From encryption to access controls, we prioritize your data's safety.")
                                </p>

                                <a href="">@lang("messages.Finance, Healthcare, Legal")</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 co-sm-12 with-50 with-810">
                        <div class="solution-card">
                            <div class="solution-card-image">
                                <img src="{{ url('assets/images/solution-icon6.svg') }}" alt="">
                            </div>
                            <div class="solution-card-content">
                                <h6>@lang('messages.Collaborate and Conquer')
                                </h6>
                                <p>
                                    @lang("messages.Work together seamlessly with AItify’s collaborative features. Share insights, annotate charts, and drive collective growth.")
                                </p>

                                <a href="">@lang("messages.Design, Development, Project Management")</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 co-sm-12 with-50 with-810">
                        <div class="solution-card">
                            <div class="solution-card-image">
                                <img src="{{ url('assets/images/solution-icon7.svg') }}" alt="">
                            </div>
                            <div class="solution-card-content">
                                <h6>@lang('messages.Simplicity Meets Power')
                                </h6>
                                <p>
                                    @lang("messages.iAtify offers an intuitive interface that's easy to navigate, ensuring you spend less time figuring things out and more time analyzing.")
                                </p>

                                <a href="">@lang("messages.All Industries")</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 co-sm-12 with-50 with-810">
                        <div class="solution-card">
                            <div class="solution-card-image">
                                <img src="{{ url('assets/images/solution-icon8.svg') }}" alt="">
                            </div>
                            <div class="solution-card-content">
                                <h6>@lang('messages.Let AI Do the Heavy Lifting')
                                </h6>
                                <p>
                                    @lang("messages.Receive automated insights and recommendations tailored to your business needs. Let iAtify's AI guide your strategies.")
                                </p>

                                <a href="">@lang("messages.Retail, Marketing, Sales")</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 co-sm-12 with-50 with-810">
                        <div class="solution-card">
                            <div class="solution-card-image">
                                <img src="{{ url('assets/images/solution-icon9.svg') }}" alt="">
                            </div>
                            <div class="solution-card-content">
                                <h6>@lang('messages.Collaborate and Conquer')
                                </h6>
                                <p>
                                    @lang("messages.Whether you're a startup or an enterprise, iAtify scales with you. Experience robust analytics solutions that adapt to your growth.")
                                </p>

                                <a href="">@lang("messages.Startups, SMEs, Enterprises")</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="solution-more-card-btn">
                    <a href="">@lang('messages.Explore more application')</a>
                </div>
            </div>
        </div>
    </section>
    <!-- solution section end -->
    <!-- packages Section Start -->
    <section class="packages-section">
        <div class="container">
            <div class="package-content">
                <h1>@lang('messages.Choose the Right Plan for Your Business')</h1>
                <p>@lang("messages.At IAtify, we offer flexible pricing plans tailored to meet the diverse needs of our clients. Whether you're a small startup or a large enterprise, our goal is to provide you with the highest value and help you harness the full potential of various AI tools, saving you time in the process. Discover our plans and choose the one that best suits your needs.")</p>
                    <div class="month-year-wrp">
                        <span>Monthly</span>
                        <label class="switch">
                            <input type="checkbox" id="priceChangeCheckbox" onchange="PriceChange()">
                            <span class="slider round"></span>
                          </label>
                        <span>Yearly</span>
                        <span class="save-mony">Save 20%</span>
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="pakages-main mt-5">
                        <div class="pakages">
                            <span>@lang('messages.Basic')</span>
                            <h2 id="basic">$ 19</h2>
                            <p id="month">Per month</p>
                            <a href="#" class="btn plan-btn btn-primary">@lang('messages.Get plan')</a>
                        </div>
                        <div class="pgkes-type">
                            <ul class="mt-5 list-inline">
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Basic, everyday AI')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.1 User Account')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.GPT4o')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Dall-E 2')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Stable Diffusion XL')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Brand Voice')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.50,000 Tokens')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.50 Tokens (Images)')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.40 Templates (Premium)')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.Custom Template')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.Custom Chatbot')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Writer Tools')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI PDF, DOC, CSV')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Image Generator')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.(NEW) Photo Studio')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.(NEW) AI Social Media')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.(NEW) Manage Scheduled Posts')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Coding Assistant')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.AI Plagiarism Checker')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.AI Detector')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.AI Web Assistant')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.AI Video Generator')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Speech Text')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.AI Voice Over')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.AI Voice Cloner')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.Priority Support')</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="Professional-pakages mt-5">
                        <div class="pakages">
                            <span>@lang('messages.Professional')</span>
                            <h2 id="Professional">$ 35</h2>
                            <p id="month2">Per month</p>
                            <a href="#" class="btn plan-btn btn-primary">@lang('messages.Get plan')</a>
                        </div>
                        <div class="pgkes-type">
                            <ul class="mt-5 list-inline">
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Professional, the AI tool for smooth scaling')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.4 User Account')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.GPT4o')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Dall-E 3')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.SDXL Turbo')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Brand Voice')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.100,000 Tokens')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.125 Tokens (Images)')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.+160 Templates (Premium)')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Custom Template')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.Custom Chatbot')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Writer Tools')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI PDF, DOC, CSV')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Image Generator')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.(NEW) Photo Studio')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.(NEW) AI Social Media')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.(NEW) Manage Scheduled Posts')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Coding Assistant')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.AI Plagiarism Checker')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.AI Detector')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Web Assistant')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span >@lang('messages.AI Video Generator')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Speech Text')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Voice Over')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.AI Voice Cloner')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span >@lang('messages.Priority Support')</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pakages-main mt-5">
                        <div class="pakages">
                            <span>@lang('messages.Advanced')</span>
                            <h2 id="Advanced">$ 49</h2>
                            <p id="month3">Per month</p>
                            <a href="#" class="btn plan-btn btn-primary">@lang('messages.Get plan')</a>
                        </div>
                        <div class="pgkes-type">
                            <ul class="mt-5 list-inline">
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Advanced, the ultimate tool you need')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.10 User Account')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.GPT4o')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Dall-E 3')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Stable Diffusion 3')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Brand Voice')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.300,000 Tokens')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.250 Tokens (Images)')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.+160 Templates (Premium)')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Custom Template')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Custom Chatbot')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Writer Tools')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI PDF, DOC, CSV')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Image Generator')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span class="disabled">@lang('messages.(NEW) Photo Studio')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.(NEW) AI Social Media')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.(NEW) Manage Scheduled Posts')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Coding Assistant')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span >@lang('messages.AI Plagiarism Checker')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span >@lang('messages.AI Detector')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Web Assistant')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span >@lang('messages.AI Video Generator')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Speech Text')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Voice Over')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span >@lang('messages.AI Voice Cloner')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span >@lang('messages.Priority Support')</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="pakages-main mt-5">
                        <div class="pakages">
                            <span>@lang('messages.Enterprise')</span>
                            <h2 id="Enterprise">$ 159</h2>
                            <p id="month4">Per month</p>
                            <a href="#" class="btn plan-btn btn-primary">@lang('messages.Get plan')</a>
                        </div>
                        <div class="pgkes-type">
                            <ul class="mt-5 list-inline">
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Enterprise, for a very small part')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.20 User Account')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Choice of LLM model AI')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Dall-E 3')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Stable Diffusion 3')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Brand Voice')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.500,000 Tokens')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.1000 Tokens (Images)')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.+160 Templates (Premium)')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Custom Template')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span >@lang('messages.Custom Chatbot')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Writer Tools')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI PDF, DOC, CSV')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.Image Generator')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.(NEW) Photo Studio')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.(NEW) AI Social Media')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.(NEW) Manage Scheduled Posts')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Coding Assistant')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span >@lang('messages.AI Plagiarism Checker')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span >@lang('messages.AI Detector')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Web Assistant')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span >@lang('messages.AI Video Generator')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Speech Text')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span>@lang('messages.AI Voice Over')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span >@lang('messages.AI Voice Cloner')</span>
                                    </div>
                                </li>
                                <li class="mt-4">
                                    <div>
                                        <img src="assets/images/AI.svg" alt="" />
                                    </div>
                                    <div>
                                        <span >@lang('messages.Priority Support')</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- packages Section end -->
      <!-- experince banner section -->
      <section class="expereince-banner">
        <div class="container">
            <div class="expereince-banner-main"
                style="background-image: url(assets/images/Theme\ color\ overlay\ transition.png);">
                <div class="row ">
                    <div class="col-lg-7 with-100">
                        <div class="exper-banner-content">
                            <h1>@lang('messages.All-in-one solution for all your needs')</h1>
                            <p class="exper-text">@lang("messages.Streamline all your tasks in one convenient platform: from writing, designing, editing, transcribing, generating images, creating blogs, to generating voices and defining your brand voice—all in one place.")</p>
                            <div class="exper-banner-content-btn">
                                <a href="">@lang('messages.Start your free trail') &nbsp;<img src="{{ url('assets/images/R icon.png') }}" alt=""></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 with-100">
                        <div class="row gy-4">
                            <div class="col-12 pe-5 ped-md">

                                <div class="exp-banner-card">
                                    <div class="exp-card-image">
                                        <img src="{{ url('assets/images/credit card cursor click.png') }}" alt="">
                                    </div>
                                    <div class="exp-card-content">
                                        <h6>@lang('messages.Instant Access')</h6>
                                        <p>@lang("messages.Begin exploring iAtify's full suite of features immediately")</p>
                                    </div>
                                </div>


                            </div>
                            <div class="col-12 pe-5 ped-md">

                                <div class="exp-banner-card">
                                    <div class="exp-card-image">
                                        <img src="{{ url('assets/images/Vector-icon.png') }}" alt="">
                                    </div>
                                    <div class="exp-card-content">
                                        <h6>@lang('messages.No Commitments')</h6>
                                        <p>@lang('messages.No credit card required, and you can cancel anytime')</p>
                                    </div>
                                </div>


                            </div>
                            <div class="col-12 pe-5 ped-md">

                                <div class="exp-banner-card">
                                    <div class="exp-card-image">
                                        <img src="{{ url('assets/images/Vector-icon2.png') }}" alt="">
                                    </div>
                                    <div class="exp-card-content">
                                        <h6>@lang('messages.Dedicated Support')</h6>
                                        <p>@lang('messages.Our team is here to assist you every step of the way during your trial.')</p>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- experince banner section end -->
    <!-- faq section start -->
    <section class="faq mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 with-100">
                    <div class="faq-content-main">
                        <div class="faq-head-main">
                            <img src="{{ url('assets/images/AI.svg') }}" alt="">
                            <p>FAQ</p>
                        </div>
                        <div class="faq-content">
                            <h1>@lang('messages.Frequently Asked Questions (FAQ)')</h1>
                            <p>@lang('messages.Explore to learn more about how IAtify can empower your business with AI-driven solutions.')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 with-100">
                    <div class="accordion">
                        <div class="faq-list-main">
                            <button id="accordion-button-1" aria-expanded="false">
                                <span class="accordion-title">@lang('messages.What can I create using your platform?')</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    @lang('messages.Our platform allows you to create a wide range of content, including written articles, designed graphics, edited videos, transcribed audio, generated images, crafted blog posts, and personalized voiceovers.')
                                </p>
                            </div>
                        </div>
                        <div class="faq-list-main">
                            <button id="accordion-button-2" aria-expanded="false">
                                <span class="accordion-title">@lang('messages.How easy is it to use your platform?')</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    @lang("messages.Our platform is designed for ease of use. With intuitive tools and user-friendly interfaces, you can effortlessly navigate through various features to create professional-grade content with minimal effort.")
                                </p>
                            </div>
                        </div>
                        <div class="faq-list-main">
                            <button id="accordion-button-3" aria-expanded="false">
                                <span class="accordion-title">@lang('messages.Can I personalize my content on your platform?')
                                </span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                   @lang("messages.Absolutely! You can personalize your content extensively. Whether it’s adjusting text styles, customizing image elements, or tailoring voiceovers to match your brand tone, our platform offers robust customization options.")
                                </p>
                            </div>
                        </div>
                        <div class="faq-list-main">
                            <button id="accordion-button-4" aria-expanded="false">
                                <span class="accordion-title">@lang('messages.Is your platform suitable for businesses of all sizes?')</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    @lang("messages.Yes, our platform caters to businesses of all sizes. Whether you’re a small startup or a large enterprise, our tools are scalable and adaptable to meet your content creation needs effectively.")
                                </p>
                            </div>
                        </div>
                        <div class="faq-list-main">
                            <button id="accordion-button-5" aria-expanded="false">
                                <span class="accordion-title">@lang('messages.How can your platform help boost my online presence?')</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                    @lang("messages.By enabling you to create diverse and engaging content types, our platform empowers you to enhance your online presence. From SEO-optimized blog posts to visually appealing graphics and compelling videos, you can attract and retain a broader audience.")
                                </p>
                            </div>
                        </div>
                        <div class="faq-list-main">
                            <button id="accordion-button-5" aria-expanded="false">
                                <span class="accordion-title">@lang("messages.What are the benefits of using AI on your platform?")</span>
                                <span class="icon" aria-hidden="true"></span>
                            </button>
                            <div class="accordion-content">
                                <p>
                                  @lang("messages.Leveraging AI on our platform ensures efficiency and accuracy in content creation. AI helps automate repetitive tasks, enhances creativity with data-driven insights, and improves overall productivity by streamlining workflows.")
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    
@endsection