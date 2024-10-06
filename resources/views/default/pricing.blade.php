@extends('include-layout.layout')
@section('title')
    Pricing
@endsection
@section('content')
    <section>
        <div class="Plan">
            <div class="container">
                <div class="Plan-contant">
                    <h2 class="mt-5">@lang('messages.Choose the Right Plan for Your Business')</h2>
                    <p class="mt-5">
                        @lang("messages.At IAtify, we offer flexible pricing to suit businesses of all sizes. Our plans help you maximize AI tools and save time. Explore and find the plan that fits you best.")
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="Monthly">
            <div class="container">
                <div class="month-year-wrp">
                    <span>Monthly</span>
                    <label class="switch">
                        <input type="checkbox" id="priceChangeCheckbox" onchange="PriceChange()">
                        <span class="slider round"></span>
                      </label>
                    <span>Yearly</span>
                    <span class="save-mony">Save 20%</span>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="pakages-main mt-5">
                            <div class="pakages">
                                <span>@lang('messages.Basic')</span>
                                <h2 id="basic">$ 19</h2>
                                <p id="month">Per month</p>
                                <a href="https://app.iatify.com/register/" class="btn plan-btn btn-primary">@lang('messages.Get plan')</a>
                            </div>
                            <div class="pgkes-type">
                                <ul class="mt-5 list-inline">
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.Basic, Everyday AI tool for Writers')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.1 Seat')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.GPT4o Mini, GPT4o and Gemini 1,5 flash')</span>
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
                                            <span>@lang('messages.(New) Flux AI Pro')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span class="disabled">@lang('messages.Brand Voice')</span>
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
                                            <span>@lang('messages.30 Tokens (Images)')</span>
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
                                            <span class="disabled">@lang('messages.(NEW) External Chatbot')</span>
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
                                            <span class="disabled">@lang('messages.AI Web Assistant')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.(NEW) AI Voice Isolator')</span>
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
                                <h2 id="Professional">$ 49</h2>
                                <p id="month2">Per month</p>
                                <a href="https://app.iatify.com/register/" class="btn plan-btn btn-primary">@lang('messages.Get plan')</a>
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
                                            <span>@lang('messages.4 Seats')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.GPT4o, Gemini 1.5 flash, Claude 3.5 Sonnet')</span>
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
                                            <span>@lang('messages.(New) Flux Realism Lora')</span>
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
                                            <span>@lang('messages.75,000 Tokens')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.75 Tokens (Images)')</span>
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
                                            <span class="disabled">@lang('messages.(NEW) External Chatbot')</span>
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
                                            <span>@lang('messages.AI Web Assistant')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span >@lang('messages.(NEW) AI Voice Isolator')</span>
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
                                <h2 id="Advanced">$ 89</h2>
                                <p id="month3">Per month</p>
                                <a href="https://app.iatify.com/register/" class="btn plan-btn btn-primary">@lang('messages.Get plan')</a>
                            </div>
                            <div class="pgkes-type">
                                <ul class="mt-5 list-inline">
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.Advanced AI-Driven Forecasting')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.10 Seats')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.GPT4o, o1-mini, Gemini 1.5 Pro, Claude 3.5 Sonnet')</span>
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
                                            <span>@lang('messages.(New) Flux Realism Lora')</span>
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
                                            <span>@lang('messages.200,000 Tokens')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.100 Tokens (Images)')</span>
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
                                            <span>@lang('messages.(NEW) External Chatbot')</span>
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
                                            <span>@lang('messages.AI Web Assistant')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.(NEW) AI Voice Isolator')</span>
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
                                            <span>@lang('messages.AI Voice Cloner')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.Priority Support')</span>
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
                                <h2 id="Enterprise" style="font-size: 33px;">Contact Us</h2>
                                <p id="month4">Per month</p>
                                <a href="https://app.iatify.com/register/" class="btn plan-btn btn-primary">@lang('messages.Get plan')</a>
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
                                            <span>@lang('messages.Unlimited')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.Choice of AI (OpenAI, Gemini, Claude)')</span>
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
                                            <span>@lang('messages.(New) Flux Realism Lora')</span>
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
                                            <span>@lang('messages.Unlimited Tokens')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.Unlimited Tokens (Images)')</span>
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
                                            <span>@lang('messages.Image Generator')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.(NEW) External Chatbot')</span>
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
                                            <span>@lang('messages.AI Web Assistant')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.(NEW) AI Voice Isolator')</span>
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
                                            <span>@lang('messages.AI Voice Cloner')</span>
                                        </div>
                                    </li>
                                    <li class="mt-4">
                                        <div>
                                            <img src="assets/images/AI.svg" alt="" />
                                        </div>
                                        <div>
                                            <span>@lang('messages.Priority Support')</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    
    <section>
        <div class="Compare">
            <div class="container">
                <div class="Compare-contant my-5">
                    <h2>@lang('messages.Compare & get your plan')</h2>
                    <span>@lang('messages.Designed for every stage of your journey.')</span>
                </div>
                <div class="Compare-table">
                    <table class="w-100">
                        <thead>
                            <tr>
                                <th>
                                    <div class="pb-2 pt-5">
                                        <h1>@lang('messages.Compare <br/> plans')</h1>
                                    </div>
                                </th>
                                <th>
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center text-center pb-4 pt-5">
                                        <span>@lang('messages.Basic')</span>
                                        <a href="https://app.iatify.com/register/" class="btn plan-btn btn-primary">@lang('messages.Get plan')</a>
                                    </div>
                                </th>
                                <th class="Professional">
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center text-center pb-4 pt-5">
                                        <span>@lang('messages.Professional')</span>
                                        <a href="https://app.iatify.com/register/" class="btn plan-btn btn-primary">@lang('messages.Get plan')</a>
                                    </div>
                                </th>
                                <th>
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center text-center pb-4 pt-5">
                                        <span>@lang('messages.Advanced')</span>
                                        <a href="https://app.iatify.com/register/" class="btn plan-btn btn-primary">@lang('messages.Get plan')</a>
                                    </div>
                                </th>
                                <th>
                                    <div
                                        class="d-flex flex-column align-items-center justify-content-center text-center pb-4 pt-5">
                                        <span>@lang('messages.Enterprise')</span>
                                        <a href="https://app.iatify.com/register/" class="btn plan-btn btn-primary">@lang('messages.Get plan')</a>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <div>
                                        <span>@lang('messages.Usage')</span>
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.User Teams')</span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.1 User Account')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>
                                        <p>@lang('messages.Up to 4 User Accounts')</p>
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.Up to 10 User Accounts')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.Unlimited')</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.Model AI  Used')</span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.GPT4o Mini, GPT4o and Gemini 1,5 flash')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.GPT4o, Gemini 1.5 flash, Claude 3.5 Sonnet')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.GPT4o, o1-mini, Gemini 1.5 Pro, Claude 3.5 Sonnet')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.Choice of AI (OpenAI, Gemini, Claude)')</p>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.Model AI  Used(Image)')</span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.Stable Diffusion 3 <br> (<b>New</b>) Flux AI Pro')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.Stable Diffusion 3 <br> (<b>New</b>) Flux Realism Lora')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.Stable Diffusion 3 <br> (<b>New</b>) Flux Realism Lora')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.Stable Diffusion 3 <br> (<b>New</b>) Flux Realism Lora')</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.AI Generation')</span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.50 000 Tokens')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.75,000 Tokens')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.200,000 Tokens')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.Unlimited')</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.AI Generation (image)')</span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.30 Tokens')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.75 Tokens')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.100 Tokens')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.Unlimited')</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.Templates')</span>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.+40 (Regular)')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.+160 (Premuim)')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.+160 (Premuim)')</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p>@lang('messages.+160 (Premuim)')</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.Custom Templates')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center ">     
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.Custom Chabot PDF, docx, link web, Q/A')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center PAD">     
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center PAD">     
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.Brand Voice')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                     
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div>
                                        <span>@lang('messages.AI - Writer Tools')</span>
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.AI Editor')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.Article Wizard (SEO)')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.AI Rewrite')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.RSS Content Generator')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <div>
                                        <span>@lang('messages.Image/Video Tools')</span>
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.AI Image Generator')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                         


                            <tr>
                                <th>
                                    <div>
                                        <span>@lang('messages.AI - Voice Tools')</span>
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.Speech to Text')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center ">     
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.(<b>NEW</b>)  AI Voice Isolator')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center ">     
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.Voice Over')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center PAD">     
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center ">     
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.Voice Cloner')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center PAD">     
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center PAD">     
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div>
                                        <span>@lang('messages.AI - Tools')</span>
                                    </div>
                                </th>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <p></p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.AI Coding Assistant')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.AI YouTube to Blog')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center PAD">     
                                    </div>                                   
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.AI Web Assistant')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center PAD">     
                                    </div>
                                </td>
                                <td class="">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.AI PDF, Doc, CSV')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.(<b>NEW</b>) External Chatbot')</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center PAD">     
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center PAD">     
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.(<b>NEW</b>) AI Social Media')</span>

                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center PAD">     
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <span>@lang('messages.(<b>New</b>) Manage Scheduled Posts')</span>

                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center PAD">     
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div>
                                        <span>@lang('messages.Priority Support')</span>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center PAD">     
                                    </div>
                                </td>
                                <td class="Professional2">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center ">
                                        <img src="assets/images/Vector.svg" alt="" />
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
                            <h2>@lang("messages.What pricing plans do you offer?")</h2>
                            <p class="mt-3">@lang("messages.We offer flexible pricing plans to cater to different needs. Our plans range from basic packages suitable for individuals to enterprise-level solutions with advanced features. You can choose a plan that best fits your requirements and budget.")</p>
                        </div>
                        <div class="col mt-3">
                            <h2>@lang('messages.Are there any discounts available for long-term subscriptions?')</h2>
                            <p class="mt-3">@lang('messages.Yes, we offer discounts for annual subscriptions. By opting for a yearly plan, you can save compared to monthly payments. Check our pricing page for more details on available discounts.')</p>
                        </div>
                        <div class="col mt-3">
                            <h2>@lang('messages.Can I cancel my subscription at any time?')</h2>
                            <p class="mt-3">@lang('messages.Yes, you can cancel your subscription at any time. We believe in providing flexibility to our users. There are no long-term commitments, and you can manage your subscription directly from your account settings.')</p>
                        </div>
                        <div class="col mt-3">
                            <h2>@lang("messages.Do you offer a free trial period?")</h2>
                            <p class="mt-3">@lang("messages.Yes, we offer a free trial period for new users. It’s a great opportunity to explore our platform and its features before committing to a subscription. Sign up today to start your free trial.")</p>
                        </div>
                        <div class="col mt-3">
                            <h2>@lang('messages. What features are included in the basic plan?')</h2>
                            <p class="mt-3">@lang('messages.Our basic plan includes essential features such as content creation tools, basic analytics, and customer support. It’s designed for individuals or small businesses looking to get started with our platform.')</p>
                        </div>
                        <div class="col mt-3">
                            <h2>@lang("messages.How can I upgrade my plan if my needs change?")</h2>
                            <p class="mt-3">@lang('messages.You can easily upgrade your plan at any time from your account dashboard. Simply select the plan that suits your updated requirements, and the changes will take effect immediately.')</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
