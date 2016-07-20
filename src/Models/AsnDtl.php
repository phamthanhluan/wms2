<?php

namespace Seldat\Wms2\Models;

class AsnDtl extends BaseSoftModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'asn_dtl';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'asn_dtl_id';

    /**
     * @var array
     */
    protected $fillable = [
        'asn_hdr_id',
        'ctnr_id',
        'itm_id',
        'asn_dtl_po',
        'asn_dtl_po_dt',
        'uom_id',
        'asn_dtl_ctn_ttl',
        'asn_dtl_crs_doc',
        'asn_dtl_des',
        'asn_dtl_length',
        'asn_dtl_width',
        'asn_dtl_height',
        'asn_dtl_weight',
        'asn_dtl_volume',
        'asn_dtl_pack',
    ];

    public function item()
    {
        return $this->belongsTo('App\Item', 'itm_id', 'item_id');
    }

    //a GR has a Ctn, a ASN has n Ctn
    public function container()
    {
        return $this->belongsTo('App\Container', 'ctnr_id', 'ctnr_id');
    }

    public function asnHdr()
    {
        return $this->belongsTo('App\AsnHdr', 'asn_hdr_id', 'asn_hdr_id');
    }
    
    public function grDtl()
    {
        return $this->hasOne('App\GoodsReceiptDetail', 'asn_dtl_id', 'gr_dtl_id');
    }

    public function systemUom()
    {
        return $this->belongsTo('App\SystemUom', 'uom_id', 'sys_uom_id');
    }

}
