<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);

        if (in_array($locale, Config::get('app.supported_locales'))) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        } else {
            $locale = Session::get('locale', Config::get('app.locale', 'en'));
            App::setLocale($locale);
        }

        return $next($request);
    }
}
