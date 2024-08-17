<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Http\RedirectResponse;

class UsersController extends Controller
{
    //change langange
    public function Setlocale($lang): RedirectResponse
    {
        if (in_array($lang, ['en', 'fr', 'gr', 'sp'])) {
            App::setLocale($lang);
            Session::put('locale', $lang);
        }
        return redirect()->back();
    }
    //end change langange

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
    public function aboutus()
    {
        return view('default.about-us');
    }

    // AiGenerator
    public function AiGenerator()
    {
        return view('default.ai-generator');
    }

    // CustomizeChatbot
    public function CustomizeChatbot()
    {
        return view('default.customize-chatbot');
    }

    // AIFIleChatAIVison
    public function AIFIleChatAIVison()
    {
        return view('default.AI-FIle-Chat-AI-Vison');
    }

    // AiSocialMedia
    public function AiSocialMedia()
    {
        return view('default.Ai-social-media');
    }
    // AISpeech 
    public function AISpeech()
    {
        return view('default.AI-speech');
    }
    // AIWriter
    public function AIWriter()
    {
        return view('default.AI-Writer');
    }
    // BrandVoice
    public function BrandVoice()
    {
        return view('default.Brand-voice');
    }
    // AiVoiceover
    public function AiVoiceover()
    {
        return view('default.Ai-Voiceover');
    }
    // AiVoiceInstead
    public function AiVoiceInstead()
    {
        return view('default.Ai-Voice-Instead');
    }
    // blog
    public function blog()
    {
        return view('default.blog.blog');
    }
    // BlogPostDetils
    public function BlogPostDetils()
    {
        return view('default.blog.blog_post_detils');
    }
    // CookiePolicy
    public function CookiePolicy()
    {
        return view('default.Cookie-Policy');
    }
    // PrivacyPolicy
    public function PrivacyPolicy()
    {
        return view('default.Privacy-Policy');
    }
    // TermandCondition
    public function TermandCondition()
    {
        return view('default.Term-and-Condition');
    }
}
