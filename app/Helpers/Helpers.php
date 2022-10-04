<?php

if (!function_exists('getVisitorIp')) {
    function getVisitorIp()
    {
        if (env('APP_ENV') == 'local') {
            return '110.15.22.10';
            // return long2ip(mt_rand());
        }
        return request()->ip();
    }
}
if (!function_exists('getStorePath')) {
    function getStorePath($path)
    {
        if (env('APP_ENV') == 'local') {

            return "/$path";
        }

        return "/public/$path";
    }
}

if (!function_exists('getAssetVersion')) {
    function getAssetVersion()
    {
        return md5(22);
    }
}
