@extends('include-layout.layout')
@section('title')

Faq
    
@endsection
@section('content')

{{-- <section>
  <div class="asked my-5">
    <div class="container">
      <div class="asked-contant">
        <h2>@lang('messages.Frequently asked questions')</h2>
        <p>@lang('messages.Explore our frequently asked questions to learn more about iAtify’s features, security, integration capabilities, and more')</p>
      </div>
      <div class="custom-accordion my-5">
        <div class="accordion-items" id="item1">
          <h3>@lang('messages.What is iAtify and how does it differ from other analytics platforms?')</h3>
          <i class="fa fa-chevron-up"></i>
          <span>@lang('messages.iAtify is an AI-powered business analytics platform designed to provide real-time insights, predictive analytics, and seamless integrations with various tools. Unlike traditional analytics platforms, iAtify harnesses the power of artificial intelligence to offer more accurate forecasts, customizable dashboards, and a user-friendly interface tailored for businesses of all sizes.')</span>
        </div>
        <div class="accordion-items mt-3" id="item2">
          <h3>@lang("messages.How does the AI-driven predictive analytics feature work?")</h3>
          <i class="fa fa-chevron-up"></i>
          <span>@lang('messages.iAtify is an AI-powered business analytics platform designed to provide real-time insights, predictive analytics, and seamless integrations with various tools. Unlike traditional analytics platforms, iAtify harnesses the power of artificial intelligence to offer more accurate forecasts, customizable dashboards, and a user-friendly interface tailored for businesses of all sizes.')</span>
        </div>
        <div class="accordion-items mt-3" id="item3">
          <h3>@lang("messages.Is my data secure with iAtify?")</h3>
          <i class="fa fa-chevron-up"></i>
          <span>.....</span>
        </div>
        <div class="accordion-items mt-3" id="item4">
          <h3>@lang("messages.Can I integrate iAtify with other tools and platforms I currently use?")</h3>
          <i class="fa fa-chevron-up"></i>
          <span>.....</span>
        </div>
        <div class="accordion-items mt-3" id="item5">
          <h3>@lang("messages.How is the pricing structured for iAtify? Are there any hidden fees?")</h3>
          <i class="fa fa-chevron-up"></i>
          <span>.....</span>
        </div>
        <div class="accordion-items mt-3" id="item6">
          <h3>@lang("messages.I'm new to business analytics. Does iAtify offer any support or tutorials?")</h3>
          <i class="fa fa-chevron-up"></i>
          <span>.....</span>
        </div>
        <div class="accordion-items mt-3" id="item7">
          <h3>@lang("messages.Can I integrate iAtify with other tools and platforms I currently use?")</h3>
          <i class="fa fa-chevron-up"></i>
          <span>.....</span>
        </div>
        <div class="accordion-items mt-3" id="item8">
          <h3>@lang("messages.What type of data do you collect and how is it used?")</h3>
          <i class="fa fa-chevron-up"></i>
          <span>.....</span>
        </div>
        <div class="accordion-items mt-3" id="item9">
          <h3>@lang("messages.I'm new to business analytics. Does iAtify offer any support or tutorials?")</h3>
          <i class="fa fa-chevron-up"></i>
          <span>.....</span>
        </div>
      </div>
    </div>
  </div>
</section> --}}
<section>
  <div class="questions mt-5">
    <div class="container">
      <div class="questions-contant">
        <span class="text-canter">
          FAQ
        </span>
        <h2 class="text-canter">
          @lang('messages.Frequently Asked Questions (FAQ)')
        </h2>
      </div>
      <div class="Frequently">
        <div class="Frequently-contant mt-5">
          <div class="Frequently-items">
            <div class="icon">
              <i class="fa-solid fa-plus"></i>
            </div>
            <h2>@lang("messages.What is the policy for refunds and cancellations?")</h2>
          </div>
          <div class="line">
            <span>@lang("messages.Refund and cancellation policies are straightforward. If you are unsatisfied with the service, you can request a refund within 14 days of purchase. You must have generated less than 1000 tokens text and 5 images for the refund to be accepted. Cancellations can be done anytime through your account settings, and they will be effective immediately. Please contact our support team for any specific inquiries regarding refunds.")</span>
          </div>
        </div>
        <div class="Frequently-contant mt-5">
          <div class="Frequently-items">
            <div class="icon">
              <i class="fa-solid fa-plus"></i>
            </div>
            <h2>@lang('messages.How are AI tokens counted?')</h2>
          </div>
          <div class="line">
            <span>@lang("messages.AI tokens are counted based on the number of interactions or requests made to our AI system. Each request, regardless of its complexity, consumes a fixed number of tokens. Detailed information about token usage can be found in your account dashboard, where you can monitor your token consumption in real time.")</span>
          </div>
        </div>
        <div class="Frequently-contant mt-5">
          <div class="Frequently-items">
            <div class="icon">
              <i class="fa-solid fa-plus"></i>
            </div>
            <h2>@lang('messages.How many generations can I perform?')</h2>
          </div>
          <div class="line">
            <span>@lang("messages.The number of generations you can perform depends on the plan you have subscribed to. Each plan comes with a defined number of tokens. Depending on the service you use, there is a number of tokens to spend, and there isn't an exact way to calculate the prediction of token generation because it all depends on the services used, the AI, the quality desired, the number of words, the duration of the audio, and many other criteria.")</span>
          </div>
        </div>
        <div class="Frequently-contant mt-5">
          <div class="Frequently-items">
            <div class="icon">
              <i class="fa-solid fa-plus"></i>
            </div>
            <h2>@lang('messages.Who is IAtify designed for?')</h2>
          </div>
          <div class="line">
            <span>@lang("messages.IAtify is designed for a wide range of users including businesses, developers, content creators, and researchers who need advanced AI capabilities for tasks such as text generation, data analysis, and more. Our flexible plans and powerful AI tools cater to both individual users and large organizations.")</span>
          </div>
        </div>
        <div class="Frequently-contant mt-5">
          <div class="Frequently-items">
            <div class="icon">
              <i class="fa-solid fa-plus"></i>
            </div>
            <h2>@lang("messages.What happens if I exceed my token quota? Can I still use the software?")</h2>
          </div>
          <div class="line">
            <span>@lang("Message.Once you exceed your token quota, you will either need to wait until the next billing cycle for your tokens to reset or purchase additional tokens to continue using the software. The service will temporarily halt until additional tokens are acquired. Notifications will be sent as you approach your token limit to help manage your usage.")</span>
          </div>
        </div>
        <div class="Frequently-contant my-5">
          <div class="Frequently-items">
            <div class="icon">
              <i class="fa-solid fa-plus"></i>
            </div>
            <h2>@lang('messages.How long is your free trial?')</h2>
          </div>
          <div class="line">
            <span>@lang("MESSAGES.Our free trial lasts for 3 days. This period allows you to explore our services and evaluate if they meet your needs.")</span>
          </div>
        </div>
        <div class="Frequently-contant my-5">
          <div class="Frequently-items">
            <div class="icon">
              <i class="fa-solid fa-plus"></i>
            </div>
            <h2>@lang('messages.How is my data stored? Is it secure?')</h2>
          </div>
          <div class="line">
            <span>@lang("messages.Your data is stored using state-of-the-art security measures to ensure its safety. We employ advanced encryption technologies and regularly update our security protocols to protect your information from unauthorized access and breaches.")</span>
          </div>
        </div>
        <div class="Frequently-contant my-5">
          <div class="Frequently-items">
            <div class="icon">
              <i class="fa-solid fa-plus"></i>
            </div>
            <h2>@lang('messages.Where is my data stored?')</h2>
          </div>
          <div class="line">
            <span>@lang("messages.Your data is stored in secure data centers located both in the United States and within the European Union. These centers comply with rigorous international standards and regulations to ensure data safety and integrity.")</span>
          </div>
        </div>
        <div class="Frequently-contant my-5">
          <div class="Frequently-items">
            <div class="icon">
              <i class="fa-solid fa-plus"></i>
            </div>
            <h2>@lang('messages.Still have questions?')</h2>
          </div>
          <div class="line">
            <span>@lang("messages.For any other questions, feel free to reach out to our customer support team who are available 24/7 to assist you.")</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- <section>
  <div class="FAQ">
      <div class="container">
          <div class="FAQ-contant my-5">
              <span>FAQ</span>
              <h2>@lang("messages.Frequently Asked Questions (FAQ)")</h2>
              <p>@lang("messages.Explore to learn more about how iAtify can empower your business with AI-driven solutions.")</p>
          </div>
          <div class="FAQ-Question">
              <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 ">
                  <div class="col mt-3">
                      <h2>@lang("messages.Can iAtify's AI solutions be business systems?")</h2>
                      <p class="mt-3">@lang("messages.Yes, integration is a key strength of our AI solutions. iAtify's AI platform is designed for flexibility and can be integrated with a wide range of existing business systems.")</p>
                  </div>
                  <div class="col mt-3">
                      <h2>@lang("messages.What types of AI services does iAtify offer?")</h2>
                      <p class="mt-3">@lang("messages.Absolutely, our services are scalable and designed to accommodate and process large amounts of data efficiently.")</p>
                  </div>
                  <div class="col mt-3">
                      <h2>@lang("messages.What customer support do you offer for your AI solutions?")</h2>
                      <p class="mt-3">@lang("messages.Our services can benefit various industries, including healthcare, finance, retail, entertainment, and many more, wherever AI can be leveraged.")</p>
                  </div>
                  <div class="col mt-3">
                      <h2>@lang("messages.Can your AI help improve my website's conversion rate?")</h2>
                      <p class="mt-3">@lang("messages.We pride ourselves on our service's adaptability, user-centric design, and our continual commitment to pushing the boundaries of AI technology.")</p>
                  </div>
                  <div class="col mt-3">
                      <h2>@lang("messages.Can your AI identify areas for A/B testing and personalization?")</h2>
                      <p class="mt-3">@lang("messages.We offer a range of support services from online resources, live chat support, to dedicated account representatives for enterprise customers.")</p>
                  </div>
                  <div class="col mt-3">
                      <h2>@lang("messages.How can your AI help improve my website's SEO ranking?")</h2>
                      <p class="mt-3">@lang("messages.Yes, our platform allows for custom model training with your proprietary datasets.")</p>
                  </div>
              </div>
          </div>
      </div>

  </div>
</section> --}}
  
@endsection
 