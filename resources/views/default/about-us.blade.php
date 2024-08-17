@extends('include-layout.layout')
@section('title')

About-Us
    
@endsection
@section('content')
<section>
    <div class="Journey-main">
        <div class="container">
            <h1 class="my-4"><b>@lang('messages.The Journey of iAtify')</b></h1>
            <p class="my-4">@lang("messages.Welcome to iAtify! We're a team of passionate data enthusiasts and tech innovators committed to transforming the way businesses interact with data. Established in 2024,iAtify has grown to a big leading in AI-driven analytics solutions.")
            </p>
            <div class="Journey-img my-5">
                <div class="vide-icon">
                    <img src="public/assets/images/videoIcon.png" alt="button">
                </div>
            </div>
            <div class="Journey-contant">
                <span>
                   @lang("messages.At iAtify, we believe in the transformative power of data. Our journey began with a simple yet powerful vision: to unlock the potential of data for businesses of all sizes. Over the years, we have evolved into a leading provider of AI-powered analytics solutions, committed to delivering insights that drive decision-making and foster growth.")
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
    <div class="Our-mission mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <h1 class="mt-5">@lang("messages.Our mission")</h1>
                    <p class="mt-5">@lang("messages.Our mission at iAtify is straightforward: to empower organizations with actionable insights through cutting-edge AI and machine learning technologies. We believe in making complex data analysis accessible, understandable, and actionable for businesses of all sizes across various industries.")</p>
                </div>
                <div class="col-md-5 mobile-column">
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12">
                    <div class="Our-img-contant">
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-4">
                                <img src="public/assets/images/Flexible.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="public/assets/images/Product.png" alt="">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <img src="public/assets/images/Product.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="public/assets/images/Product.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="public/assets/images/Product.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="Our-vision">
        <div class="container">
            <div class="vision-contant">
                <h1 class="mt-5">@lang("messages.Our vision")</h1>
                <p class="mt-5">@lang("messages.At iAtify, we believe in the transformative power of data. Our journey began with a simple yet powerful vision: to unlock the potential of data for businesses of all sizes. Over the years, we have evolved into a leading provider of AI-powered analytics solutions, committed to delivering insights that drive decision-making and foster growth.")</p>
            </div>
            <div class="vision-img mt-5">
                <div class="row">
                    <div class="col-lg-3 col-md-6 my-4"><img src="./public/assets/images/vision1.jpeg" alt="vision 1">
                    </div>
                    <div class="col-lg-3 col-md-6 my-4"><img src="./public/assets/images/vision2.jpeg" alt="vision 2">
                    </div>
                    <div class="col-lg-3 col-md-6 my-4"><img src="./public/assets/images/vision3.jpeg" alt="vision 3">
                    </div>
                    <div class="col-lg-3 col-md-6 my-4"><img src="./assets//images/vision4.jpeg" alt="vision 4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="Our-service mt-5">
        <div class="container">
            <div class="Our-service-contant">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <h1 class="mt-5">@lang("messages.Our service")</h1>
                        <p class="mt-5">@lang("messages.iAtify specializes in a variety of services, including predictive analytics, custom AI model development, business intelligence solutions, and more. Our solutions are tailored to meet the unique needs and challenges of each client, ensuring optimal outcomes.")</p>
                        <div class="Our-service-img">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 my-2">
                                    <img src="public/assets/images/vision3.jpeg" alt="visionIMG">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 my-2">
                                    <img src="public/assets/images/vision1.jpeg" alt="visionIMG">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h1 class="mt-5">@lang("messages.Our Commitment")</h1>
                        <p class="mt-5">@lang("messages.We are dedicated to pushing the boundaries of what's possible in data analytics, continually improving our solutions, and empowering businesses to unlock their full potential. With iAtify, data isn’t just numbers; it's the key to your business's future.")</p>
                        <div class="Our-Commitment-img">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 my-2">
                                    <img src="public/assets/images/vision4.jpeg" alt="visionIMG">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 my-2">
                                    <img src="public/assets/images/vision2.jpeg" alt="visionIMG">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section>
    <div class="Team">
        <div class="container">
            <div class="Team-contant">
                <span>@lang("messages.Team")</span>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h2>@lang("messages.Meet the Innovators Steering Excellence")</h2>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <p class="mt-5">@lang("messages.We invite you to explore our website, learn more about our services, and see how iAtify can help your business thrive in the age of data")</p>
                    </div>
                </div>
                <div class="profile mt-5">
                    <div class="row row-cols-lg-3 row-cols-md-2">
                        <div class="col my-2">
                            <div class="profile-img">
                                <img src="public/assets/images/profile1.jpeg" alt="">
                            </div>
                            <div class="profile-contant mt-2">
                                <h6>Dr. Emily Thompson</h6>
                                <p>@lang("messages.Co-Founder & CEO")</p>
                                <ul class="list-inline d-flex justify-content-center gap-2">
                                    <li>
                                        <img src="public/assets/images/facbookicon.svg" alt="facbook">
                                    </li>
                                    <li>
                                        <img src="public/assets/images/linkdin.svg" alt="linkdin">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col my-2">
                            <div class="profile-img">
                                <img src="public/assets/images/profile2.jpeg" alt="">
                            </div>
                            <div class="profile-contant mt-2">
                                <h6>Dr. Emily Thompson</h6>
                                <p>@lang("messages.Co-Founder & CEO")</p>
                                <ul class="list-inline d-flex justify-content-center gap-2">
                                    <li>
                                        <img src="public/assets/images/facbookicon.svg" alt="facbook">
                                    </li>
                                    <li>
                                        <img src="public/assets/images/linkdin.svg" alt="linkdin">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col my-2">
                            <div class="profile-img">
                                <img src="public/assets/images/profile3.jpeg" alt="">
                            </div>
                            <div class="profile-contant mt-2">
                                <h6>Dr. Emily Thompson</h6>
                                <p>@lang("messages.Co-Founder & CEO")</p>
                                <ul class="list-inline d-flex justify-content-center gap-2">
                                    <li>
                                        <img src="public/assets/images/facbookicon.svg" alt="facbook">
                                    </li>
                                    <li>
                                        <img src="public/assets/images/linkdin.svg" alt="linkdin">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col my-2">
                            <div class="profile-img">
                                <img src="public/assets/images/profile4.jpeg" alt="">
                            </div>
                            <div class="profile-contant mt-2">
                                <h6>Dr. Emily Thompson</h6>
                                <p>@lang("messages.Co-Founder & CEO")</p>
                                <ul class="list-inline d-flex justify-content-center gap-2">
                                    <li>
                                        <img src="public/assets/images/facbookicon.svg" alt="facbook">
                                    </li>
                                    <li>
                                        <img src="public/assets/images/linkdin.svg" alt="linkdin">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col my-2">
                            <div class="profile-img">
                                <img src="public/assets/images/profile5.jpeg" alt="">
                            </div>
                            <div class="profile-contant mt-2">
                                <h6>Dr. Emily Thompson</h6>
                                <p>@lang("messages.Co-Founder & CEO")</p>
                                <ul class="list-inline d-flex justify-content-center gap-2">
                                    <li>
                                        <img src="public/assets/images/facbookicon.svg" alt="facbook">
                                    </li>
                                    <li>
                                        <img src="public/assets/images/linkdin.svg" alt="linkdin">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col my-2">
                            <div class="profile-img">
                                <img src="public/assets/images/profile6.jpeg" alt="">
                            </div>
                            <div class="profile-contant mt-2">
                                <h6>Dr. Emily Thompson</h6>
                                <p>@lang("messages.Co-Founder & CEO")</p>
                                <ul class="list-inline d-flex justify-content-center gap-2">
                                    <li>
                                        <img src="public/assets/images/facbookicon.svg" alt="facbook">
                                    </li>
                                    <li>
                                        <img src="public/assets/images/linkdin.svg" alt="linkdin">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    
@endsection