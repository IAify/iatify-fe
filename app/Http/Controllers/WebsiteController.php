<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class WebsiteController extends Controller
{
    public function Setlocale($locale)
    {
        $supportedLocales = Config::get('app.supported_locales');

        if (in_array($locale, $supportedLocales)) {
            App::setLocale($locale);
            session(['locale' => $locale]);
        }

        $previousUrl = url(null)->previous();
        $urlSegments = explode('/', $previousUrl);
        $urlSegments[3] = $locale;

        return Redirect::to(implode('/', $urlSegments));
    }

    public function index()
    {
        return view('default.index');
    }

    public function contact()
    {
        return view('default.contact');
    }

    public function price()
    {
        return view('default.pricing');
    }

    public function faq()
    {
        return view('default.FAQ');
    }

    public function aboutUs()
    {
        return view('default.about-us');
    }

    public function aiGenerator()
    {
        return view('default.features.ai-generator');
    }

    public function CustomizeChatbot()
    {
        return view('default.features.customize-chatbot');
    }

    public function AIFIleChatAIVision()
    {
        return view('default.features.ai-file-chat-ai-vision');
    }

    public function AiSocialMedia()
    {
        return view('default.features.ai-social-media');
    }

    public function AISpeech()
    {
        return view('default.features.ai-speech');
    }

    public function AIWriter()
    {
        return view('default.features.ai-writer');
    }

    public function BrandVoice()
    {
        return view('default.features.brand-voice');
    }

    public function AiVoiceover()
    {
        return view('default.features.ai-voiceover');
    }

    public function AiVoiceInstead()
    {
        return view('default.features.ai-voice-instead');
    }

    public function blog()
    {
        return view('default.blog.blog');
    }

    public function BlogPostDetails()
    {
        return view('default.blog.blog_post_details');
    }

    public function CookiePolicy()
    {
        return view('default.Cookie-Policy');
    }

    public function PrivacyPolicy()
    {
        return view('default.Privacy-Policy');
    }

    public function termAndCondition()
    {
        return view('default.Term-and-Condition');
    }
}
