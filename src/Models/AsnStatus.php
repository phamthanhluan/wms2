<?php

namespace Seldat\Wms2\Models;

class AsnStatus extends BaseModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'asn_status';

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
        'asn_sts_code',
        'asn_sts_name',
        'asn_sts_des',
    ];
}
