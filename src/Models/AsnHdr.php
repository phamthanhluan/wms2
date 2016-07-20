<?php

namespace Seldat\Wms2\Models;

use Seldat\Wms2\Utils\Database\Eloquent\Bas;

class AsnHdr extends BaseSoftModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'asn_hdr';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'asn_hdr_id';

    /**
     * @var array
     */
    protected $fillable = [
        'asn_hdr_seq',
        'asn_hdr_ept_dt',
        'asn_hdr_num',
        'asn_hdr_ref',
        'cus_id',
        'whs_id',
        'asn_sts',
        'asn_hdr_des',
        'asn_hdr_ctn_ttl',
        'asn_hdr_itm_ttl',
        'sys_mea_code',
        'asn_hdr_ctnr_ttl',
    ];

    //--pt:show ASN detail
    public function asnStatus()
    {
        return $this->belongsTo('App\AsnStatus', 'asn_sts', 'asn_sts_code');
    }
    public function asnDtl()
    {
        return $this->hasMany('App\AsnDtl', 'asn_hdr_id', 'asn_hdr_id');
    }

    public function customer()
    {
        return $this->hasOne('App\Customer', 'cus_id', 'cus_id');
    }

    public function warehouse()
    {
        return $this->hasOne('App\Warehouse', 'whs_id', 'whs_id');
    }

    public function createdUser()
    {
        return $this->belongsTo('App\User', 'created_by', 'user_id');
    }
    //--/pt:


}
