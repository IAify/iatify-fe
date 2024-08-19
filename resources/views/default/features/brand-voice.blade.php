@extends('include-layout.layout')
@section('title')
    @lang("messages.Brand-voice")
@endsection

@section('content')
    <section>
        <div class="Chatbot">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="Chatbot-content mt-5">
                            <h2>@lang("messages.Brand Voice for AI 📣")</h2>
                            <span>@lang("messages.Generate AI content exclusive to your brand and eliminate the need <br> for repetitive presentations from your company.")</span>
                            <a href="#" class="start-trial">@lang('messages.Start your free trail')</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="Chatbot-img" style="background-image: url(../assets/images/images/herobanner.png);">
                            <img src="assets/images/images/Contentpixel.png" alt="" />
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
                    <h2>@lang("messages.How Our Customize your Brand <br> Voice for AI")</h2>
                    <p>
                        @lang("messages.Experience simplicity with our groundbreaking system. Bid farewell to the repetitive task of infusing your brand into every content piece. Whether you manage one or multiple brands, oversee numerous companies or social media accounts, or operate several online stores, our solution liberates you from this constraint.")
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
                            <span>@lang("messages.Case study")</span>
                            <h2>@lang("messages.Real-World Applications")</h2>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p>
                                @lang("messages.At the heart of IAtify AI Generator lies the power to turn your ideas into reality. Join us to explore the endless possibilities that AI can bring to your creativity.")
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
                                <a href="#">@lang("messages.Company")</a>
                                <p>
                                    @lang("messages.Define your brand essence with our comprehensive brand management solution, crafting a memorable tagline and establishing a consistent tone of voice.")
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
                                <a href="#">@lang("messages.Products")</a>
                                <p>
                                    @lang("messages.Showcase your offerings with stunning product images, driving engagement and conversions with vibrant colors and a user-friendly website.")
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
                                <a href="#">@lang("messages.Audience")</a>
                                <p>
                                    @lang("messages.Connect effortlessly with tailored products and messaging, resonating with teenagers, students, and creative individuals.")
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
                        @lang("messages.Streamlined Integration with <br> Customizable AI Solutions")
                    </h2>
                    <p>
                        @lang("messages.At IAtify, our AI Generator empowers you to turn your ideas into reality with customized chatbots. This personalization saves businesses valuable time and resources, unlocking endless possibilities for creativity and efficiency. Join us to explore how AI can transform your operations and enhance your productivity.")
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
                                @lang("messages.Transform Your Business with <br> Personalized AI")
                                
                            </h2>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="assets/images/pack-li-img.svg" alt="" />
                                <span>
                                    @lang("messages.Transform content creation with Brand Voice for AI")</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="assets/images/pack-li-img.svg" alt="" />
                                <span>
                                    @lang("messages.Unlock endless possibilities with tailored AI solutions")</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="assets/images/pack-li-img.svg" alt="" />
                                <span>@lang("messages.Save time and enhance productivity with seamless automation")</span>
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
                                @lang("messages.How does the AI Brand Voice feature benefit my brand?")
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang("messages.Our AI Brand Voice feature enables you to generate exclusive content tailored to your brand, eliminating the need for repetitive brand presentations. Whether you manage one or multiple brands, businesses, social media accounts, or online stores, our solution frees you from this constraint. Create your Brand Voice once and let our system handle the rest for all future content generations, saving you valuable time and ensuring consistency in your communication without the need to repeat your branding.")</span>
                        </div>
                        <div class="accordion-items mt-3" id="item2">
                            <h3>
                                @lang("messages.What advantages does the system offer in terms of content creation?")
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang("messages.With our system, content creation becomes effortless, allowing you to focus on the core aspects of growing your business. By streamlining the process and automating brand voice generation, our solution empowers you to concentrate on essential business development tasks while maintaining a consistent and engaging brand presence across all channels.")</span>
                        </div>
                        <div class="accordion-items mt-3" id="item3">
                            <h3>
                                @lang("messages.What role does the system play in simplifying the management of multiple brands or businesses?")
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang("messages.The system simplifies brand management by allowing you to create and maintain consistent brand voices across multiple brands or businesses. It centralizes the process, ensuring that each brand maintains its unique identity while streamlining content creation and management tasks.")</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
