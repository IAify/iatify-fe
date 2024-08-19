@extends('include-layout.layout')
@section('title')
    @lang('messages.Ai-Voice-Instead')
@endsection

@section('content')
    <section>
        <div class="blog_hero">
            <div class="container">
                <div class="blog_contant my-4">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="blog_batg">
                                <img src="assets/images/pack-li-img.svg" alt="">
                                <span>@lang('messages.blog')</span>
                            </div>
                            <h2>@lang('messages.Insights and Innovations')</h2>
                            <p>@lang('messages.Welcome to the iAtify Blog - your hub for the latest trends, insights, and breakthroughs in the world of AI and data analytics. Here, we explore the evolving landscape of data science, share expert opinions, and provide practical advice to help you navigate the digital age. Dive into our articles to stay ahead in the fast-paced world of technology.')</p>
                        </div>
                        <div class="col-4 hide"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="Featured_Blog my-5">
            <div class="container">
                <h2 class="my-4">@lang('messages.Featured Blog Posts')</h2>
                <div class="row row-cols-lg-2 row-cols-md-1 row-cols-sm-1 row-cols-1">
                    <div class="col mb-5">
                        <div class="blogs_card">
                            <div class="blogs_card_img">
                                <img src="assets/images/images/blog_card_img.png" alt="">
                            </div>
                            <div class="blogs_card_content">
                                <div class="date">
                                    <span>20 Jan 2023</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h2>@lang('messages.Demystifying AI: Understanding Its Impact on Everyday Business')</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="blogs_card">
                            <div class="blogs_card_img">
                                <img src="assets/images/images/blog_card_img2.png" alt="">
                            </div>
                            <div class="blogs_card_content">
                                <div class="date">
                                    <span>@lang('messages.20 Jan 2023')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h2>@lang('messages.Demystifying AI: Understanding Its Impact on Everyday Business')</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="blogs_card">
                            <div class="blogs_card_img">
                                <img src="assets/images/images/blog_card_img3.png" alt="">
                            </div>
                            <div class="blogs_card_content">
                                <div class="date">
                                    <span>@lang('messages.20 Jan 2023')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h2>@lang('messages.Demystifying AI: Understanding Its Impact on Everyday Business')</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="blogs_card">
                            <div class="blogs_card_img">
                                <img src="assets/images/images/blog_card_img4.png" alt="">
                            </div>
                            <div class="blogs_card_content">
                                <div class="date">
                                    <span>@lang('messages.20 Jan 2023')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h2>@lang('messages.Demystifying AI: Understanding Its Impact on Everyday Business')</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="Others my-5">
            <div class="container">
                <h2>@lang('messages.Others')</h2>
                <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1">
                    <div class="col mb-5">
                        <div class="Others_card">
                            <div class="Others_card_img">
                                <img src="assets/images/images/other_card_1.png" alt="">
                            </div>
                            <div class="Others_card_body">
                                <div class="Report">
                                    <span>@lang('messages.Report')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h6>@lang('messages.The Rise of AI in Business Analytics: What You Need to Know')</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="Others_card">
                            <div class="Others_card_img">
                                <img src="assets/images/images/other_card_2.png" alt="">
                            </div>
                            <div class="Others_card_body">
                                <div class="Report">
                                    <span>@lang('messages.Report')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h6>@lang('messages.Customizing Your iAtify Dashboard: A Step-by-Step Guide')</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="Others_card">
                            <div class="Others_card_img">
                                <img src="assets/images/images/other_card_3.png" alt="">
                            </div>
                            <div class="Others_card_body">
                                <div class="Report">
                                    <span>@lang('messages.Report')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h6>@lang('messages.Customizing Your iAtify Dashboard: A Step-by-Step Guide')</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="Others_card">
                            <div class="Others_card_img">
                                <img src="assets/images/images/other_card_4.png" alt="">
                            </div>
                            <div class="Others_card_body">
                                <div class="Report">
                                    <span>@lang('messages.Report')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h6>@lang('messages.The Rise of AI in Business Analytics: What You Need to Know')</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="Others_card">
                            <div class="Others_card_img">
                                <img src="assets/images/images/other_card_5.png" alt="">
                            </div>
                            <div class="Others_card_body">
                                <div class="Report">
                                    <span>@lang('messages.Report')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h6>@lang('messages.Customizing Your iAtify Dashboard: A Step-by-Step Guide')</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="Others_card">
                            <div class="Others_card_img">
                                <img src="assets/images/images/other_card_6.png" alt="">
                            </div>
                            <div class="Others_card_body">
                                <div class="Report">
                                    <span>@lang('messages.Report')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h6>@lang('messages.Customizing Your iAtify Dashboard: A Step-by-Step Guide')</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="Others_card">
                            <div class="Others_card_img">
                                <img src="assets/images/images/other_card_7.png" alt="">
                            </div>
                            <div class="Others_card_body">
                                <div class="Report">
                                    <span>@lang('messages.Report')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h6>@lang('messages.The Rise of AI in Business Analytics: What You Need to Know')</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="Others_card">
                            <div class="Others_card_img">
                                <img src="assets/images/images/other_card_8.png" alt="">
                            </div>
                            <div class="Others_card_body">
                                <div class="Report">
                                    <span>@lang('messages.Report')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h6>@lang('messages.The Rise of AI in Business Analytics: What You Need to Know')</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="Others_card">
                            <div class="Others_card_img">
                                <img src="assets/images/images/other_card_9.png" alt="">
                            </div>
                            <div class="Others_card_body">
                                <div class="Report">
                                    <span>@lang('messages.Report')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h6>@lang('messages.The Rise of AI in Business Analytics: What You Need to Know')</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="Others_card">
                            <div class="Others_card_img">
                                <img src="assets/images/images/other_card_10.png" alt="">
                            </div>
                            <div class="Others_card_body">
                                <div class="Report">
                                    <span>@lang('messages.Report')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h6>@lang('messages.The Rise of AI in Business Analytics: What You Need to Know')</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="Others_card">
                            <div class="Others_card_img">
                                <img src="assets/images/images/other_card_11.png" alt="">
                            </div>
                            <div class="Others_card_body">
                                <div class="Report">
                                    <span>@lang('messages.Report')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h6>@lang('messages.The Rise of AI in Business Analytics: What You Need to Know')</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="Others_card">
                            <div class="Others_card_img">
                                <img src="assets/images/images/other_card_12.png" alt="">
                            </div>
                            <div class="Others_card_body">
                                <div class="Report">
                                    <span>@lang('messages.Report')</span>
                                </div>
                                <a href="{{ lang_route('BlogPostDetails') }}">
                                    <h6>@lang('messages.The Rise of AI in Business Analytics: What You Need to Know')</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
