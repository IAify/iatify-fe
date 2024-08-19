@extends('include-layout.layout')
@section('title')
    AI-speech
@endsection

@section('content')
    <section>
        <div class="Chatbot">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-8 col-md-6 col-12">
                        <div class="Chatbot-content mt-5">
                            <h2>@lang("messages.AI Speech To Text")🎙️</h2>
                            <span>@lang("messages.Tired of having to laboriously decipher your audio recordings during meetings ?")</span>
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
                    <h2>@lang("messages.Enhancing Transcription Accuracy <br> with AI-Powered GPT-4o")</h2>
                    <p>
                        @lang("messages.Our AI, powered by GPT-4o, is able to understand and predict mispronounced words or filter out ambient noise, ensuring accurate and complete transcription. No more wasted hours trying to enter every word, our technology guarantees you a faithful and effective transcription, allowing you to focus on most of your meetings.")
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
                                <a href="#">@lang("messages.Seamless Meeting Transcription")</a>
                                <p>
                                    @lang("messages.A busy executive juggles multiple meetings daily. Our AI transcription service accurately captures discussions, freeing them from note-taking distractions, ensuring productivity.")
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
                                <a href="#">@lang("messages.Effortless Lecture Recording")</a>
                                <p>
                                    @lang("messages.University professors effortlessly record lectures with our AI transcription. Students access accurate lecture notes, enhancing their learning experience.")
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
                                <a href="#">@lang("messages.Streamlined Interview Documentation")</a>
                                <p>
                                    @lang("messages.Journalists conduct interviews seamlessly with our AI transcription. They focus on insightful questions while our technology documents discussions efficiently.")
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
                        @lang("messages.Streamlined Integration with <br /> Customizable AI Solutions")
                    </h2>
                    <p>
                        @lang("messages.At IAtify, our AI Generator revolutionizes operations by crafting personalized chatbots from your ideas. This customization optimizes efficiency and creativity, saving valuable time and resources. Experience the power of AI to enhance productivity—join us in exploring its transformative potential.")
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
                                @lang("messages.Transform Your Business with <br /> Personalized AI")
                            </h2>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="assets/images/pack-li-img.svg" alt="" />
                                <span>
                                    @lang("messages.Embrace Personalized AI Solutions for Your Business Today!")</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="assets/images/pack-li-img.svg" alt="" />
                                <span>
                                    @lang("messages.Discover boundless potential and streamline your operations with customized AI technology.")</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 my-3">
                                <img src="assets/images/pack-li-img.svg" alt="" />
                                <span>@lang("messages.Experience seamless automation, saving time and boosting productivity.")</span>
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
                                @lang("messages.Explore our frequently asked questions to learn more about iAtify’s features, security, integration capabilities, and more")
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 with-100">
                    <div class="custom-accordion my-5">
                        <div class="accordion-items" id="item1">
                            <h3>
                                @lang("messages.Tired of struggling to decipher audio recordings during meetings ?")
                            </h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang("messages.With our AI, transcription has become incredibly simple. Just upload the audio file and let the magic happen: automatic transcription.")</span>
                        </div>
                        <div class="accordion-items mt-3" id="item2">
                            <h3>@lang("messages.How does it work?")</h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang("messages.Our AI, driven by GPT-4o, can understand and predict mispronounced words or filter out background noise, ensuring accurate and comprehensive transcription.")</span>
                        </div>
                        <div class="accordion-items mt-3" id="item3">
                            <h3>@lang("messages.How does this benefit me ?")</h3>
                            <i class="fa fa-chevron-up"></i>
                            <span>@lang("messages.Say goodbye to wasted hours trying to capture every word. Our technology guarantees faithful and efficient transcription, allowing you to focus on the essence of your meetings.")</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
