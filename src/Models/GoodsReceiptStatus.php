<?php

namespace Seldat\Wms2\Models;

/**
 *
 * @property mixed gr_sts_code
 * @property mixed gr_sts_name
 * @property mixed gr_sts_des
 */
class GoodsReceiptStatus extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gr_status';

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
    protected $fillable = [
        'gr_sts_code',
        'gr_sts_name',
        'gr_sts_des',
    ];

    public function goodsReceipt()
    {
        return $this->hasOne('App\GoodsReceipt', 'gr_sts', 'whs_sts_code');
    }
}
