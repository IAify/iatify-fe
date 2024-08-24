<?php

if (! function_exists('lang_route')) {
    function lang_route(string $name, array $parameters = [], bool $absolute = true)
    {
        return route($name, array_merge($parameters, ['locale' => '']), $absolute);
    }
}
