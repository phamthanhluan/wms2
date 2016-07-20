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
 */
class GoodsReceiptDetail extends BaseSoftModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gr_dtl';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'gr_dtl_id';

    /**
     * @var array
     */
    protected $fillable = [
        'asn_dtl_id',
        'gr_hdr_id',
        'gr_dtl_ept_ctn_ttl',
        'gr_dtl_act_ctn_ttl',
        'gr_dtl_cus_note',
        'gr_dtl_disc',
        'gr_dtl_plt_ttl',
        'gr_dtl_is_dmg',
    ];

    public function goodsReceiptStatus()
    {
        return $this->belongsTo('App\GoodsReceiptStatus', 'gr_sts', 'gr_sts_code');
    }

    public function goodsReceipt()
    {
        return $this->belongsTo('App\GoodsReceipt', 'gr_hdr_id', 'gr_hdr_id');
    }

    public function asnDetail()
    {
        return $this->belongsTo('App\AsnDtl', 'asn_dtl_id', 'asn_dtl_id');
    }
}
