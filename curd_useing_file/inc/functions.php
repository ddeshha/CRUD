<?php

/**
 * Show information of POST or GET requests
 */
if (!function_exists("dd")) {
    function dd($method)
    {
        echo "<pre>";
        print_r($method);
        echo "</pre>";
        die();
    }
}

/**
 * Sanitize Input
 */

if (!function_exists("sanitizeInput")) {
    function sanitizeInput($input)
    {
        return htmlentities(htmlspecialchars(stripcslashes(trim($input))));
    }
}

/**
 * Min length for input
 */
if (!function_exists("minVal")) {
    function minVal(string $val, int $length)
    {
        return strlen($val) < $length;
    }
}

/**
 * Max length for input
 */

if (!function_exists("maxVal")) {
    function maxVal(string $val, int $length)
    {
        return strlen($val) > $length;
    }
}

/**
 * Location
 */
if (!function_exists("redirectTo")) {

    function redirectTo($location)
    {
        header("Location: $location");
        die();
    }
}
