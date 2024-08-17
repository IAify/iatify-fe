@extends('include-layout.layout')
@section('title')
    AI Generator
@endsection

@section('content')
    <section>
        <div class="Creativity">
            <div class="container">
                <div class="Creativity-content my-5">
                    <h2 class="my-4">@lang('messages.Unleash Your Creativity with the AI Generator')

                    </h2>
                    <p>
                        @lang("messages.Create dynamic, captivating content with IAtify's AI Generator - specify your preferences and get quality content in record time.")

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
                        @lang('messages.Unleash your creative potential with our AI Writer, your ultimate ally in text generation and copywriting assistance. With over +160 pre-configured templates specialized for specific tasks, and the ability to create bespoke templates, our platform is the ideal choice for any professional wanting to optimize their written content.')

                    </span>
                    <div class="Journey-client-main mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 my-2">
                                <div class="Journey-client">
                                    <h2>@lang('messages.500+')</h2>
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
                                <h2>@lang('messages.Creating unique images')</h2>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <img src="public/assets/images/pack-li-img.svg" alt="" />
                                    <span>@lang('messages.Turn your imagination into a photo with a single click')</span>
                                </div>
                                <p>
                                    @lang('messages.Powered by Dali 3 and Stable Diffusion 3, for attractive images without graphic design skills.')
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
                                <h2>@lang('messages.Robust Code Production')</h2>
                                <div class="d-flex align-items-center my-3">
                                    <img src="public/assets/images/pack-li-img.svg" alt="" />
                                    <span>@lang('messages.No need to spend thousands of euros to create your software')</span>
                                </div>
                                <p>
                                    @lang('messages.Our code generator uses top AI and Gemini Pro, GPT-4, Claude 3 training for efficient code production. Minimize errors, save time and focus on what matters.')
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
                                <h2>@lang('messages.AI Web Chat')</h2>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <img src="public/assets/images/pack-li-img.svg" alt="" />
                                    <span>@lang('messages.Interactive & Informative Experience for Your Website')</span>
                                </div>
                                <p>
                                    @lang('messages.Share a link for automatic analysis and personalized assistance. Boost engagement and reinforce your online presence.')
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
                                <h2>@lang('messages.Unlock the AI generation power with 160+ templates')</h2>
                                <div class="d-flex align-items-center my-3">
                                    <img src="public/assets/images/pack-li-img.svg" alt="" />
                                    <span>@lang('messages.Our solutions cater to merchants, creators, and social media users worldwide.')</span>
                                </div>
                                <p>
                                    @lang('messages.Choose from over +160 ready-to-use templates or create your own with our intuitive platform. Whether you prefer customization or convenience, we have you covered.')
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
                    <span>@lang('messages.Integration')</span>
                    <h2>
                        @lang('messages.Seamless Integration with Your <br /> Existing Tech Ecosystem')
                    </h2>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 row-cols-sm-2">
                    <div class="col">
                        <div class="Integration-card">
                            <div class="card-img">
                                <img src="public/assets/images/images/Thumbnailcard1.png" alt="" />
                            </div>
                            <div class="card-content">
                                <a href="#">@lang('messages.Repurposing Videos into Blog Posts (YouTube)')</a>
                                <p>
                                    @lang('messages.With IAtify’s tool, transform your videos into powerful blog posts for multiplatform distribution, extending your reach and strengthening your online presence. Repurpose your video content to engage new audiences effortlessly.')
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
                                <a href="#">@lang('messages.Turning images into animated videos')</a>
                                <p>
                                    @lang('messages.With Gemini Pro and GPT-4o, transform your images into captivating animated videos. Our advanced algorithms assemble, edit, and produce quality videos quickly from existing or generated content.')
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
                                <a href="#">@lang('messages.Content Optimization')</a>
                                <p>
                                    @lang('messages.Content Optimization: Our platform optimizes your YouTube content with compelling titles, captivating descriptions, and precise tags, enhancing visibility, engagement, and channel growth.')
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
                                <a href="#">@lang('messages.Generate unique content with RSS Feed')</a>
                                <p>
                                    @lang('messages.Transform your content creation process with AI RSS. Generate unique and engaging content effortlessly using RSS Feeds, empowering you to captivate your audience and stay ahead of the competition.')
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
                                <a href="#">@lang('messages.Unmatched Chatbot Excellence')</a>
                                <p>
                                    @lang('messages.Empowered by GPT-4o, Gemini Pro, and Claude 3, your chatbot delivers superior quality and relevant information, elevating user experience to new heights')
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
                                <a href="#">@lang('messages.Unlock the power of AI with Chat Image')</a>
                                <p>
                                    @lang('messages.With Chat Image, effortlessly generate context-aware images for any text, revolutionizing content creation with precision and ease.')
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
                                @lang('messages.Experience the power of AI <br /> content creation with IAtify !')
                            </h2>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="public/assets/images/pack-li-img.svg" alt="" />
                                <span>
                                    @lang('messages.Context-aware natural language search and discovery')</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="public/assets/images/pack-li-img.svg" alt="" />
                                <span>
                                    @lang('messages.Embark on a journey of data-driven decision-making')</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="public/assets/images/pack-li-img.svg" alt="" />
                                <span> @lang('messages.Single permission model for data + AI')</span>
                            </div>
                            <a href="#" class="start-trial">@lang('messages.Start your free trail')</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="power-img-line" >
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
                            <p>@lang('messages.FAQ')</p>
                        </div>
                        <div class="faq-content">
                            <h1>@lang('messages.Frequently Asked Questions (FAQ)')</h1>
                            <p>
                                @lang('messages.Explore to learn more about how IAtify can empower your business with AI-driven solutions.')
                                
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 with-100">
                    <div class="custom-accordion my-5">
                        <div class="accordion-items" id="item1">
                            <h3>
                                @lang("messages.What types of content can I generate with Genaity's AI Generator?")
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang('messages.You can create persuasive marketing text, blog posts, captivating images, clean source code, and engaging videos.')</span>
                        </div>
                        <div class="accordion-items mt-3" id="item2">
                            <h3>
                                @lang('messages.How does IAtify’s AI Image Generator work, and what are its advantages?')
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang('messages.It uses AI models like Dali 3 and Stable Diffusion 3 to create customizable images, saving time and ensuring quality without graphic design skills.')</span>
                        </div>
                        <div class="accordion-items mt-3" id="item3">
                            <h3>
                                @lang('messages.Which programming languages are supported by IAtify’s AI Code Generator, and how does it ensure code quality?')
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang('messages.It supports Python, JavaScript, HTML/CSS, and more, powered by Gemini Pro, GPT-4, and Claude 3, ensuring clean and efficient code.')</span>
                        </div>
                        <div class="accordion-items mt-3" id="item4">
                            <h3>
                                @lang("messages.How does Genaity's AI Video Generator transform images into animated videos, and what are the benefits?")
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang('messages.It uses Gemini Pro and GPT-4 to turn static images into captivating animated videos.')</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection
