<?php

if (!function_exists('removeLastItem')) {
    function removeLastItem(array &$array)
    {
        array_pop($array);
    }
}
