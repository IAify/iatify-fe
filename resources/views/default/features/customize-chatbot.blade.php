@extends('include-layout.layout')
@section('title')
    @lang('messages.Customize your Chatbot')
@endsection

@section('content')
    <section>
        <div class="Chatbot">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="Chatbot-content mt-5">
                            <h2>@lang('messages.Customize your Chatbot')</h2>
                            <span>@lang('messages.Train it with your own data (website, PDF, text or Q&A) to make your AI content exclusive.')</span>
                            <a href="#" class="start-trial">@lang('messages.Start your free trail')</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="Chatbot-img" style="background-image: url(../assets/images/images/herobanner.png);">
                            <img src="assets/images/images/Contentpixel.svg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="Our-Customize">
            <div class="container">
                <div class="Our-Customize-content">
                    <h2>@lang('messages.How Our Customize your Chatbot')</h2>
                    <p>
                        @lang('messages.Choose your source and let IAtify’s shape your GPT in seconds. Create unlimited, fully customized Chatbots, whether you need image generation experts, personal coaches, or nutritionists. Simply import your data from websites, PDFs, texts, or Q&A files. In just 30 seconds, your personalized Chatbot will be ready to provide all the necessary answers.')
                    </p>
                </div>
                <div class="Our-Customize-img" style="background-image: url(assets/images/images/Thumbnailvideo.png);">
                    <div class="play">
                        <img src="assets/images/images/Buttonplayicon.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="Case-study mt-5">
            <div class="container">
                <div class="Case-study-content">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <span>@lang('messages.Case study')</span>
                            <h2>@lang('messages.Real-World Applications')</h2>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p>
                                @lang('messages.At the heart of IAtify AI Generator lies the power to turn your ideas into reality. Join us to explore the endless possibilities that AI can bring to your creativity.')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="Integration-card">
                            <div class="card-img">
                                <img src="assets/images/images/Thumbnailcard1.png" alt="" />
                            </div>
                            <div class="card-content">
                                <a href="#">@lang('messages.Custom Image Generation for Your Chatbot')</a>
                                <p>
                                    @lang('messages.Personalize your chatbot to generate high-quality images tailored to your specifications, ensuring visually stunning content that complements your brand.')
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="Integration-card">
                            <div class="card-img">
                                <img src="" alt="" />
                            </div>
                            <div class="card-content">
                                <a href="#">@lang('messages.Personalized AI Chat')</a>
                                <p>
                                    @lang('messages.Unlock personalized AI chat with our platform. Customize interactions using your data for tailored, engaging conversations.')
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="Integration-card">
                            <div class="card-img">
                                <img src="assets/images/images/Thumbnailcard2.png" alt="" />
                            </div>
                            <div class="card-content">
                                <a href="#">@lang('messages.Unmatched Chatbot Excellence')</a>
                                <p>
                                    @lang('messages.Empowered by GPT-4o, Gemini Pro, and Claude 3, your chatbot delivers superior quality and relevant information, elevating user experience to new heights.')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="Solutions my-5">
            <div class="container">
                <div class="Solutions-content">
                    <h2>
                        Streamlined Integration with <br />
                        Customizable AI Solutions
                    </h2>
                    <p>
                        At IAtify, our AI Generator empowers you to turn your ideas into
                        reality with customized chatbots. This personalization saves
                        businesses valuable time and resources, unlocking endless
                        possibilities for creativity and efficiency. Join us to explore
                        how AI can transform your operations and enhance your
                        productivity.
                    </p>
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="Solutions-img">
                                <img src="assets/images/images/Thumbnailsolution1.png" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="Solutions-img">
                                <img src="assets/images/images/Thumbnailsolution2.png" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                            <div class="Solutions-img">
                                <img src="assets/images/images/Thumbnailsolution3.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="power">
            <div class="container">
                <div class="row gy-5 flex-column-reverse flex-sm-column-reverse flex-lg-row flex-md-row">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="power-content">
                            <h2>
                                @lang('messages.Transform Your Business with <br /> Personalized AI')
                            </h2>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="assets/images/pack-li-img.svg" alt="" />
                                <span>
                                    @lang('messages.Effortlessly create and integrate custom chatbots')</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="assets/images/pack-li-img.svg" alt="" />
                                <span>
                                    @lang('messages.Unlock endless possibilities with tailored AI solutions')</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="assets/images/pack-li-img.svg" alt="" />
                                <span>@lang('messages.Save time and enhance productivity with seamless automation')</span>
                            </div>
                            <a href="#" class="start-trial">@lang('messages.Start your free trail')</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="power-img-line">
                            <div class="power-img" style="background-image: url(assets/images/images/Thumbnailpowerimg1.png);">
                                <img src="assets/images/images/Contentpowerimg2.svg" alt="" />
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
                            <img src="assets/images/pack-li-img.svg" alt="" />
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
                                @lang('messages.Can I train my chatbot with my own data to make its AI content exclusive?')
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang('messages.Yes, IAtify lets you train your chatbot with your own data from websites, PDFs, text files, or Q&A documents, ensuring unique and tailored AI content.')</span>
                        </div>
                        <div class="accordion-items mt-3" id="item2">
                            <h3>
                                @lang('messages.How can I customize my chatbot with IAtify?')
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang('messages.Easily customize your chatbot by choosing your data source and letting Genaity shape your GPT in seconds, creating unlimited, fully personalized chatbots for any need.')</span>
                        </div>
                        <div class="accordion-items mt-3" id="item3">
                            <h3>
                                @lang('messages.How does IAtify’s Custom Image Generation feature work?')
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang('messages.IAtify’s  feature lets you personalize your chatbot to generate high-quality images for social media, websites, or promotional materials, ensuring visually stunning content.')</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
