<?php
/**
 * Created by PhpStorm.
 * User: Sy Dai
 * Date: 26-May-16
 * Time: 09:27
 */

namespace Seldat\Wms2\Models;

/**
 * @property mixed ctnr_id
 * @property mixed asn_hdr_id
 * @property mixed gr_hdr_seq
 * @property mixed gr_hdr_ept_dt
 * @property mixed gr_hdr_num
 * @property mixed whs_id
 * @property mixed cus_id
 * @property mixed gr_in_note
 * @property mixed gr_ex_note
 * @property mixed gr_sts
 * @property mixed gr_hdr_id
 * @property mixed created_at
 * @property mixed updated_at
 * @property mixed deleted_at
 * @property mixed goodsReceiptStatus
 */
class GoodsReceipt extends BaseSoftModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gr_hdr';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'gr_hdr_id';

    /**
     * @var array
     */
    protected $fillable = [
        'ctnr_id',
        'asn_hdr_id',
        'gr_hdr_seq',
        'gr_hdr_ept_dt',
        'gr_hdr_num',
        'whs_id',
        'cus_id',
        'gr_in_note',
        'gr_ex_note',
        'gr_sts'
    ];

    public function asnHrd()
    {
        return $this->belongsTo('App\AsnHdr', 'asn_hdr_id', 'asn_hdr_id');
    }

    public function goodsReceiptStatus()
    {
        return $this->belongsTo('App\GoodsReceiptStatus', 'gr_sts', 'gr_sts_code');
    }

    public function goodsReceiptDetail()
    {
        return $this->hasMany('App\GoodsReceiptDetail', 'gr_hdr_id', 'gr_hdr_id');
    }

    public function customer()
    {
        return $this->hasOne('App\Customer', 'cus_id', 'cus_id');
    }

    public function warehouse()
    {
        return $this->hasOne('App\Warehouse', 'whs_id', 'whs_id');
    }

    public function container()
    {
        return $this->hasOne('App\Container', 'ctnr_id', 'ctnr_id');
    }
}
