<?php

use App\Models\Setting;

if (!function_exists('setting')) {


    function setting($name, $default=null)
    {
        return Setting::getByName($name, $default);
    }
}
