<?php

namespace Seldat\Wms2\Utils;

class SelStr
{
    public static function escapeLike($string)
    {
        $search = array('%', '_');
        $replace   = array('\%', '\_');
        return str_replace($search, $replace, $string);
    }

}