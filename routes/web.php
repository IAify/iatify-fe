<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('locale/{lang}', [WebsiteController::class, 'Setlocale'])->name('locale');

Route::group(['prefix' => '{locale?}', 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    Route::get('/', [WebsiteController::class, 'index'])->name('home');
    Route::get('/about-us', [WebsiteController::class, 'aboutUs'])->name('about-us');
    Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
    Route::get('/pricing', [WebsiteController::class, 'price'])->name('pricing');
    Route::get('/faq', [WebsiteController::class, 'faq'])->name('faq');
    Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
    Route::get('/blog_post_details', [WebsiteController::class, 'BlogPostDetails'])->name('BlogPostDetails');
    Route::get('/Cookie-Policy', [WebsiteController::class, 'CookiePolicy'])->name('CookiePolicy');
    Route::get('/Privacy-Policy', [WebsiteController::class, 'PrivacyPolicy'])->name('PrivacyPolicy');
    Route::get('/Term-and-Condition', [WebsiteController::class, 'termAndCondition'])->name('termAndCondition');

    Route::get('/ai-generator', [WebsiteController::class, 'aiGenerator'])->name('aiGenerator');
    Route::get('/customize-chatbot', [WebsiteController::class, 'CustomizeChatbot'])->name('CustomizeChatbot');
    Route::get('/AI-FIle-Chat-&-AI-Vision', [WebsiteController::class, 'AIFIleChatAIVision'])->name('AIFIleChatAIVision');
    Route::get('/Ai-social-media', [WebsiteController::class, 'AiSocialMedia'])->name('AiSocialMedia');
    Route::get('/AI-speech', [WebsiteController::class, 'AISpeech'])->name('AISpeech');
    Route::get('/AI-Writer', [WebsiteController::class, 'AIWriter'])->name('AIWriter');
    Route::get('/Brand-voice', [WebsiteController::class, 'BrandVoice'])->name('BrandVoice');
    Route::get('/Ai-Voiceover', [WebsiteController::class, 'AiVoiceover'])->name('AiVoiceover');
    Route::get('/customize-chatbot-external', [WebsiteController::class, 'AiVoiceInstead'])->name('AiVoiceInstead');
    Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
});

Route::group(['as' => 'default.'], function () {
    Route::get('/', [WebsiteController::class, 'index'])->name('home');
    Route::get('/about-us', [WebsiteController::class, 'aboutUs'])->name('about-us');
    Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
    Route::get('/pricing', [WebsiteController::class, 'price'])->name('pricing');
    Route::get('/faq', [WebsiteController::class, 'faq'])->name('faq');
    Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
    Route::get('/blog_post_details', [WebsiteController::class, 'BlogPostDetails'])->name('BlogPostDetails');
    Route::get('/Cookie-Policy', [WebsiteController::class, 'CookiePolicy'])->name('CookiePolicy');
    Route::get('/Privacy-Policy', [WebsiteController::class, 'PrivacyPolicy'])->name('PrivacyPolicy');
    Route::get('/Term-and-Condition', [WebsiteController::class, 'termAndCondition'])->name('termAndCondition');

    Route::get('/ai-generator', [WebsiteController::class, 'aiGenerator'])->name('aiGenerator');
    Route::get('/customize-chatbot', [WebsiteController::class, 'CustomizeChatbot'])->name('CustomizeChatbot');
    Route::get('/AI-FIle-Chat-&-AI-Vision', [WebsiteController::class, 'AIFIleChatAIVision'])->name('AIFIleChatAIVision');
    Route::get('/Ai-social-media', [WebsiteController::class, 'AiSocialMedia'])->name('AiSocialMedia');
    Route::get('/AI-speech', [WebsiteController::class, 'AISpeech'])->name('AISpeech');
    Route::get('/AI-Writer', [WebsiteController::class, 'AIWriter'])->name('AIWriter');
    Route::get('/Brand-voice', [WebsiteController::class, 'BrandVoice'])->name('BrandVoice');
    Route::get('/Ai-Voiceover', [WebsiteController::class, 'AiVoiceover'])->name('AiVoiceover');
    Route::get('/customize-chatbot-external', [WebsiteController::class, 'AiVoiceInstead'])->name('AiVoiceInstead');
    Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
});
