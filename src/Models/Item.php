<?php
/**
 * Created by PhpStorm.
 * User: Sy Dai
 * Date: 26-May-16
 * Time: 09:27
 */

namespace Seldat\Wms2\Models;

class Item extends BaseSoftModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'item';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'item_id';

    /**
     * @var array
     */
    protected $fillable = [
        'item_code',
        'description',
        'suffix',
        'sku',
        'size',
        'color',
        'uom_id',
        'pack',
        'length',
        'width',
        'height',
        'weight',
        'volume',
        'cus_id',
        'customer_upc',
        'status',
        'condition',
        'created_by',
        'updated_by',
    ];

    public function itemStatus()
    {
        return $this->belongsTo('App\ItemStatus', 'status', 'item_sts_code');
    }

    public function systemUom()
    {
        return $this->belongsTo('App\SystemUom', 'uom_id', 'sys_uom_id');
    }
}
