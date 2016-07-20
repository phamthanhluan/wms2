<?php

namespace Seldat\Wms2\Models;

/**
 *
 * @property mixed gr_sts_code
 * @property mixed gr_sts_name
 * @property mixed gr_sts_des
 */
class ItemStatus extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item_status';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = false;

    public $incrementing = false;

    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [];
}
