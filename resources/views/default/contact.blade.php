@extends('include-layout.layout')
@section('title')
    Contact
@endsection
@section('content')
    <section>
        <div class="message">
            <div class="container">
                <div class="message-contant mt-5">
                    <h2 class="text-center">@lang('messages.Send us a message')</h2>
                    <p class="text-canter">@lang('messages.Have a question, suggestion, or just want to learn more about our innovative AI-powered hiring solutions? Get in touch!')</p>
                </div>
                <div class="message-form">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form action="{{ lang_route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputEmail4" class="form-label">@lang('messages.Email Address'):</label>
                                    <input type="email" class="form-control input-box" id="inputEmail4" name="email"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">@lang('messages.Name'):</label>
                                    <input type="text" class="form-control input-box" id="name" name="name"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="Message" class="form-label">@lang('messages.Message'):</label>
                                    <textarea class="form-control input-box" style="height: 100px" placeholder="Your message..." id="Message"
                                        name="message" required></textarea>
                                </div>
                                <div class="g-recaptcha my-3" data-sitekey="{{ config('services.recaptcha.sitekey') }}">
                                </div>
                                <button type="submit">@lang('messages.submit')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="FAQ">
            <div class="container">
                <div class="FAQ-contant my-5">
                    <div class="faq-head-main">
                        <img src="assets/images/pack-li-img.svg" alt="" />
                        <p>@lang('messages.FAQ')</p>
                    </div>
                    <h2>@lang('messages.Frequently Asked Questions (FAQ)')</h2>
                    <p>@lang('messages.Explore to learn more about how iAtify can empower your business with AI-driven solutions.')</p>
                </div>
                <div class="FAQ-Question">
                    <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 ">
                        <div class="col mt-3">
                            <h2>@lang('messages.How does Iatify ensure the security of my data?')</h2>
                            <p class="mt-3">@lang('messages.IAtify uses advanced encryption techniques, multi-factor authentication, and regular security audits to ensure your data is protected against unauthorized access.')</p>
                        </div>
                        <div class="col mt-3">
                            <h2>@lang('messages.What storage options are available with IAtify?')</h2>
                            <p class="mt-3">@lang('messages.IAtify offers several storage options, including basic, premium, and enterprise plans, each with varying storage capacities and features to suit your requirements.')</p>
                        </div>
                        <div class="col mt-3">
                            <h2>@lang('messages.What does the Iatify subscription package include?')</h2>
                            <p class="mt-3">@lang('messages.Each Iatify subscription package includes secure data storage, regular updates, priority support, and additional features depending on the plan you choose.')</p>
                        </div>
                        <div class="col mt-3">
                            <h2>@lang('messages.How can I cancel my Iatify subscription?')</h2>
                            <p class="mt-3">@lang('messages.You can cancel your IAtify subscription anytime by logging into your account, navigating to the subscription settings, and following the cancellation instructions. For further assistance, you can contact support.')</p>
                        </div>
                        <div class="col mt-3">
                            <h2>@lang('messages.How can I reach Iatify support for help?')</h2>
                            <p class="mt-3">@lang('messages.IAtify support can be reached via email, phone, or live chat. Detailed contact information is available on our website, and our support team is ready to assist you with any queries or issues you may have.')</p>
                        </div>
                        <div class="col mt-3">
                            <h2>@lang("messages.How can your AI help improve my website's SEO ranking?")</h2>
                            <p class="mt-3">@lang('messages.Yes, our platform allows for custom model training with your proprietary datasets.')</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
