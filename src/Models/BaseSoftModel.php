<?php

namespace Seldat\Wms2\Models;


use Seldat\Wms2\Utils\Database\Eloquent\SoftDeletes;
use Seldat\Wms2\Utils\JWTUtil;

class BaseSoftModel extends BaseModel
{
    use SoftDeletes;

    public static function boot()
    {
        parent::boot();

        $userId = JWTUtil::getPayloadValue('jti') ? : 0;

        // create a event to happen on updating
        static::updating(function($table) use ($userId)  {
            $table->updated_by = $userId;
        });

        // create a event to happen on deleting
        static::deleting(function($table) use ($userId)  {
            $table->updated_by = $userId;
        });

        // create a event to happen on saving
        static::saving(function($table) use ($userId)  {
            $table->created_by = $table->created_by ? : $userId;
            $table->updated_by = $userId;
        });
    }
}