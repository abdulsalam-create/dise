<?php

if (! function_exists('clean')) {
    function clean($html)
    {
        return HTMLPurifier::getInstance()->purify($html);
    }
}
