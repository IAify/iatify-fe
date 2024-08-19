@extends('include-layout.layout')
@section('title')
    @lang("messages.Ai-Voiceover")
@endsection

@section('content')
    <section>
        <div class="Creativity">
            <div class="container">
                <div class="Creativity-content my-5">
                    <h2 class="my-4">
                        @lang("messages.Unleash Your Creativity with the <br> Voiceover AI")

                    </h2>
                    <p>
                        @lang("messages.Transform your text into very real AI voice easily with our AI app.")
                    </p>
                    <a href="#" class="start-trial">@lang('messages.Get a demo')</a>
                </div>
                <div class="Creativity-img" style="background-image: url(../assets/images/images/herobanner.png);">
                    <div class="graphs">
                        <img src="assets/images/images/graphs.svg" alt="" />
                    </div>
                    <div class="avatar">
                        <img src="assets/images/images/avatars.png" alt="" />
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
                                    <span>@lang("messages.businesses worldwide")</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 my-2">
                                <div class="Journey-client">
                                    <h2>1,000+</h2>
                                    <span>@lang("messages.custom AI solutions developed")</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 my-2">
                                <div class="Journey-client">
                                    <h2>95%</h2>
                                    <span>@lang("messages.client satisfaction rate")</span>
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
                    <span>@lang("messages.Features")</span>
                    <h2>@lang("messages.Real-World Applications")</h2>
                    <div class="row my-2 gy-5">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content mt-5">
                                <h2>@lang("messages.AI Voiceover with Elevenlabs")</h2>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <img src="assets/images/pack-li-img.svg" alt="" />
                                    <span>@lang("messages.Discover the magic of any voice in just one click, including Adam’s")</span>
                                </div>
                                <p>
                                    @lang("messages.Elevate your content with Elevenlabs’ AI Voiceover. Craft compelling stories effortlessly with our advanced technology, ensuring clarity and emotion in every word. Enhance your creations with seamless narration and natural-sounding voices.")
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content-img" style="background-image: url(assets/images/images/Image\ item1.png);">
                                <div class="unique-graph">
                                    <img src="assets/images/images/graphs.svg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 gy-5 flex-lg-row-reverse flex-md-row-reverse  ">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content mt-5">
                                <h2>@lang("messages.AI Voiceover with Microsoft Azure")</h2>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <img src="assets/images/pack-li-img.svg" alt="" />
                                    <span>@lang("messages.Explore AI Voiceover with Microsoft Azure")</span>
                                </div>
                                <p>
                                    @lang("messages.Experience the future of voiceover technology with Microsoft Azure's AI Voiceover. Transform your content effortlessly with natural-sounding voices and seamless narration, ensuring clarity and engagement.")
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content-img2" style="background-image: url(assets/images/images/Image\ item.png);">
                                <div class="unique-graph2">
                                    <img src="assets/images/images/Content.svg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 gy-5">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content mt-5">
                                <h2>@lang("messages.AI Voiceover with OpenAI")</h2>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <img src="assets/images/pack-li-img.svg" alt="" />
                                    <span>
                                        @lang("messages.Experience lifelike narration with OpenAI's AI Voiceover technology.")</span>
                                </div>
                                <p>
                                    @lang("messages.Unlock the power of AI Voiceover with OpenAI. Elevate your content creation with natural-sounding voices and seamless narration, revolutionizing your storytelling experience")
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content-img" style="background-image: url(assets/images/images/Image\ item1.png);"> 
                                <div class="unique-graph">
                                    <img src="assets/images/images/Content2.svg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2 gy-5 flex-lg-row-reverse flex-md-row-reverse ">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content mt-5">
                                <h2>@lang("messages.AI Voiceover with Google")</h2>
                                <div class="d-flex align-items-center gap-2 my-3">
                                    <img src="assets/images/pack-li-img.svg" alt="" />
                                    <span>@lang("messages.Transform your content with Google's AI Voiceover technology.")</span>
                                </div>
                                <p>
                                    @lang("messages.Discover the seamless narration capabilities of Google's AI Voiceover. With advanced technology, your content will come to life with lifelike voices and smooth delivery")
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="unique-content-img3" style="background-image: url(assets/images/images/Image\ item3.png);">
                                <div class="unique-graph2">
                                    <img src="assets/images/images/Content3.svg" alt="" />
                                </div>
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
                        @lang("messages.Streamlined Integration with <br /> Customizable AI Solutions")
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
                <div class="row flex-column-reverse flex-lg-row flex-md-row flex-sm-column-reverse gy-5">
                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="power-content">
                            <h2>
                                @lang("messages.Revolutionize the power of AI <br> Voiceover !")
                            </h2>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="assets/images/pack-li-img.svg" alt="" />
                                <span>
                                    @lang("messages.Discover the power of context-aware natural language search and discovery with Voiceover AI")</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="assets/images/pack-li-img.svg" alt="" />
                                <span>
                                    @lang("messages.Begin your journey of data-driven decision-making with Voiceover AI")</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="assets/images/pack-li-img.svg" alt="" />
                                <span> @lang("messages.Simplify permissions with a unified model for data and AI using Voiceover AI")</span>
                            </div>
                            <a href="#" class="start-trial">@lang('messages.Start your free trail')</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
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
                                @lang("messages.How does AI Voiceover work ?")
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang("messages.AI Voiceover utilizes advanced technologies from Elevenlabs and Microsoft Azure AI to convert text into natural-sounding speech with remarkable accuracy and realism.")</span>
                        </div>
                        <div class="accordion-items mt-3" id="item2">
                            <h3>
                                @lang("messages.What are the benefits of using AI Voiceover ?")
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang("messages.By leveraging AI technology, our solution streamlines the social media publishing process, saving you time and effort. With automated campaign creation and scheduling, you can focus on other aspects of your business while AI ensures consistent and effective engagement on social media.")</span>
                        </div>
                        <div class="accordion-items mt-3" id="item3">
                            <h3>
                                @lang("messages.Can I customize the voices generated by AI Voiceover?")
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang("messages.Absolutely ! With our solution, you have full control over the voice generation process. Customize the tone, style, and accent to suit your preferences and enhance the impact of your audio content.")</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
