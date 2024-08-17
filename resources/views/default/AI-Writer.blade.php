@extends('include-layout.layout')
@section('title')
    @lang('messages.AI-Writer')
@endsection

@section('content')
    <section>
        <div class="Creativity">
            <div class="container">
                <div class="Creativity-content my-5">
                    <h2 class="my-4">
                        @lang('messages.Unleash Your Creativity with the <br />AI Writer')
                    </h2>
                    <p>
                        @lang("messages.Create dynamic, captivating content with IAtify's AI Writer - specify your preferences and get quality <br> content in record time.")
                    </p>
                    <a href="#" class="start-trial">@lang('messages.Get a demo')</a>
                </div>
                <div class="Creativity-img" style="background-image: url(../public/assets/images/images/herobanner.png);">
                    <div class="graphs">
                        <img src="public/assets/images/images/graphs.svg" alt="" />
                    </div>
                    <div class="avatar">
                        <img src="public/assets/images/images/avatars.png" alt="" />
                    </div>
                </div>
                <div class="Journey-contant mt-5">
                    <span>
                        @lang("messages.At IAtify, we harness the transformative power of AI. Our journey started with a vision to unlock AI's potential for businesses of all sizes. Today, we lead in AI-powered solutions, dedicated to providing insights that drive decision-making and foster growth.")
                    </span>
                    <div class="Journey-client-main mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 my-2">
                                <div class="Journey-client">
                                    <h2>500+</h2>
                                    <span>@lang('messages.businesses worldwide')</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 my-2">
                                <div class="Journey-client">
                                    <h2>1,000+</h2>
                                    <span>@lang('messages.custom AI solutions developed')</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 my-2">
                                <div class="Journey-client">
                                    <h2>95%</h2>
                                    <span>@lang('messages.client satisfaction rate')</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="Applications">
            <div class="container">
                <div class="Applications-content mt-5">
                    <span>@lang('messages.Features')</span>
                    <h2>@lang('messages.Real-World Applications')</h2>
                    <div class="row my-2 gy-5">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content mt-5">
                                <h2>@lang('messages.AI Writer')</h2>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <img src="public/assets/images/pack-li-img.svg" alt="" />
                                    <span>@lang('messages.Access over +160 templates and keep creating with just one click.')</span>
                                </div>
                                <p>
                                    @lang('messages.Our AI, powered by leading models like GPT-4, Claude 3, and Gemini Professional, is here to assist e-commerce merchants, YouTubers, Instagram creators, or anyone needing to write emails.')
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content-img" style="background-image: url(public/assets/images/images/Image\ item1.png);">
                                <div class="unique-graph">
                                    <img src="public/assets/images/images/graphs.svg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 gy-5 flex-lg-row-reverse flex-md-row-reverse  ">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content mt-5">
                                <h2>@lang('messages.AI Editor Unleashed')</h2>
                                <div class="d-flex align-items-center my-3">
                                    <img src="public/assets/images/pack-li-img.svg" alt="" />
                                    <span>@lang('messages.Generate content seamlessly without switching between Word and AI')</span>
                                </div>
                                <p>
                                    @lang("messages.Reinvent writing with our AI Editor integrated into IAtify. A simple yet powerful interface to create your articles in the blink of an eye, with the assistance of AI.")
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content-img2" style="background-image: url(public/assets/images/images/Image\ item.png);">
                                <div class="unique-graph2">
                                    <img src="public/assets/images/images/Content.svg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 gy-5">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content mt-5">
                                <h2>@lang("messages.Swift Blog Wizard with IAtify")</h2>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <img src="public/assets/images/pack-li-img.svg" alt="" />
                                    <span>
                                        @lang("messages.Generate a blog article with image and SEO in just 30 seconds.")</span>
                                </div>
                                <p>
                                    @lang("messages.Simply choose your topic, and let AI create SEO-optimized blog content in just seconds!")
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content-img" style="background-image: url(public/assets/images/images/Image\ item1.png);">
                                <div class="unique-graph">
                                    <img src="public/assets/images/images/Content2.svg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 gy-5 flex-lg-row-reverse flex-md-row-reverse ">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content mt-5">
                                <h2>@lang("messages.Unlock the AI generation power with 160+ templates")</h2>
                                <div class="d-flex align-items-center my-3">
                                    <img src="public/assets/images/pack-li-img.svg" alt="" />
                                    <span>@lang("messages.Our solutions cater to merchants, creators, and social media users worldwide.")</span>
                                </div>
                                <p>
                                    @lang("messages.Choose from over +160 ready-to-use templates or create your own with our intuitive platform. Whether you prefer customization or convenience, we have you covered.")
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content-img3" style="background-image: url(public/assets/images/images/Image\ item3.png);">
                                <div class="unique-graph2">
                                    <img src="public/assets/images/images/Content3.svg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="Integration my-5">
            <div class="container">
                <div class="Integration-content">
                    <span>@lang("messages.Integration")</span>
                    <h2>
                        @lang("messages.Seamless Integration with Your <br> Existing Tech Ecosystem")
                    </h2>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 row-cols-sm-2">
                    <div class="col">
                        <div class="Integration-card">
                            <div class="card-img">
                                <img src="public/assets/images/images/Thumbnailcard1.png" alt="" />
                            </div>
                            <div class="card-content">
                                <a href="#">@lang("messages.Instant Functionality at Your Fingertips")</a>
                                <p>
                                    @lang("messages.Unlock AI magic with a simple right-click. Instantly access powerful functionalities for seamless workflow enhancement.")
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="Integration-card">
                            <div class="card-img">
                                <img src="" alt="" />
                            </div>
                            <div class="card-content">
                                <a href="#">@lang("messages.Revitalize Your Content")</a>
                                <p>
                                    @lang("messages.Turn your content into unique art with one click, fearlessly avoiding plagiarism. Our AI ReWriter breathes new life into your text, effortlessly enhancing quality while preserving originality.")
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="Integration-card">
                            <div class="card-img">
                                <img src="public/assets/images/images/Thumbnailcard2.png" alt="" />
                            </div>
                            <div class="card-content">
                                <a href="#">@lang("messages.Enhance Your Text with Just One Click")</a>
                                <p>
                                    @lang("messages.Elevate your text formatting effortlessly with options to highlight, underline, frame, and format code, making your content stand out.”")
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="Integration-card">
                            <div class="card-img">
                                <img src="public/assets/images/images/Thumbnailcard3.png" alt="" />
                            </div>
                            <div class="card-content">
                                <a href="#">@lang("messages.Generate unique content with RSS Feed")</a>
                                <p>
                                    @lang("messages.Transform your content creation process with AI RSS. Generate unique and engaging content effortlessly using RSS Feeds, empowering you to captivate your audience and stay ahead of the competition.")
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="Integration-card">
                            <div class="card-img">
                                <img src="" alt="" />
                            </div>
                            <div class="card-content">
                                <a href="#">@lang("messages.Unmatched Chatbot Excellence")</a>
                                <p>
                                    @lang("messages.Empowered by GPT-4o, Gemini Pro, and Claude 3, your chatbot delivers superior quality and relevant information, elevating user experience to new heights")
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="Integration-card">
                            <div class="card-img">
                                <img src="public/assets/images/images/Thumbnailcard4.png" alt="" />
                            </div>
                            <div class="card-content">
                                <a href="#">@lang("messages.Effortless Content Export")</a>
                                <p>
                                    @lang("messages.Export your content seamlessly to multiple formats, including Word, PDF, HTML, and Markdown, with full support for code integration")
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="power">
            <div class="container">
                <div class="row flex-column-reverse flex-lg-row flex-md-row flex-sm-column-reverse gy-5">
                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="power-content">
                            <h2>
                                @lang("messages.Revolutionize your content <br> creation process today !")

                            </h2>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="public/assets/images/pack-li-img.svg" alt="" />
                                <span>
                                    @lang("messages.Explore context-aware natural language search and discovery")</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="public/assets/images/pack-li-img.svg" alt="" />
                                <span>
                                    @lang("messages.Start your journey of data-driven decision-making")</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="public/assets/images/pack-li-img.svg" alt="" />
                                <span> @lang("messages.Streamline permissions with a single model for data and AI")</span>
                            </div>
                            <a href="#" class="start-trial">@lang('messages.Start your free trail')</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="power-img-line">
                            <div class="power-img" style="background-image: url(public/assets/images/images/Thumbnailpowerimg1.png);">
                                <img src="public/assets/images/images/Contentpowerimg2.svg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 with-100">
                    <div class="faq-content-main">
                        <div class="faq-head-main">
                            <img src="public/assets/images/pack-li-img.svg" alt="" />
                            <p>@lang("messages.FAQ")</p>
                        </div>
                        <div class="faq-content">
                            <h1>@lang("messages.Frequently Asked Questions (FAQ)")</h1>
                            <p>
                                @lang("messages.Explore to learn more about how IAtify can empower your business with AI-driven solutions.")
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 with-100">
                    <div class="custom-accordion my-5">
                        <div class="accordion-items" id="item1">
                            <h3>
                                @lang("messages.How does AI Writer enhance content creation?")
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang("messages.AI Writer offers over 20 preconfigured templates tailored for specific tasks, along with the ability to create custom templates. Integrated with top-tier models like GPT-4, Claude 3, and Gemini Pro, it's the ultimate solution for professionals optimizing written content, regardless of their industry or role.")</span>
                        </div>
                        <div class="accordion-items mt-3" id="item2">
                            <h3>
                                @lang("messages.What benefits does AI Editor offer?")
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang("messages.AI Editor, seamlessly integrated into IAtify, provides a user-friendly interface for swift article composition with AI assistance, simplifying the writing process for enhanced efficiency.")</span>
                        </div>
                        <div class="accordion-items mt-3" id="item3">
                            <h3>
                                @lang("messages.How does AI Article Wizard work?")
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang("messages.With AI Article Wizard, generating SEO-optimized blog content is effortless. Simply select your topic, and AI crafts engaging articles in seconds, saving valuable time and effort.")</span>
                        </div>
                        <div class="accordion-items mt-3" id="item4">
                            <h3>
                                @lang("messages.What's unique about AI ReWriter?")
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang("messages.AI ReWriter transforms existing content into unique masterpieces with a single click, eliminating plagiarism concerns. Effortlessly enhance your texts while maintaining originality and improving quality with our AI-powered rewriting tool.")</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
