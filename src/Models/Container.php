<?php

namespace Seldat\Wms2\Models;

/**
 * @property mixed ctnr_id
 * @property mixed ctnr_num
 * @property mixed ctnr_note
 * @property mixed created_at
 * @property mixed updated_at
 * @property mixed deleted_at
 */
class Container extends BaseSoftModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'container';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ctnr_id';

    /**
     * @var array
     */
    protected $fillable = [
        'ctnr_num',
        'ctnr_note',
    ];

    public function goodsReceipt()
    {
        return $this->belongsTo('App\GoodsReceipt', 'ctnr_id', 'ctnr_id');
    }

    //pt: show ASN detail
    public function asnDtl()
    {
        return $this->belongsTo('App\AsnDtl', 'ctnr_id', 'ctnr_id');
    }


}
