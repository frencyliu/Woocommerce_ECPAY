<?php

if (!function_exists('cleanSpecialChar')) {
    function cleanSpecialChar($string)
    {
        $string = preg_replace('/[^A-Za-z0-9\-]/', ' ', $string);
        $string = preg_replace('/-+/', ' ', $string);
        $string =  preg_replace('/\s+/', ' ', $string);
        return $string;
    }
}
