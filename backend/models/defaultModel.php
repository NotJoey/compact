<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 20.02.19
 * Time: 09:26
 */

class defaultModel
{
    function escape($string)
    {
        return htmlspecialchars($string);
    }
    function base($string)
    {
        return basename($string);
    }
    function parse($string, $component)
    {
        return parse_url($string, $component);
    }
}