<?php

namespace Seldat\Wms2\Utils;

class SelArr
{
    public static function removeNullOrEmptyString($array)
    {
        return array_filter($array, function($v) {
            return $v !== null && $v !== '';
        }, ARRAY_FILTER_USE_BOTH);
    }
}