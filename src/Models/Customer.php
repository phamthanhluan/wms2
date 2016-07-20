<?php

namespace Seldat\Wms2\Models;


class Customer extends BaseSoftModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customer';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'cus_id';

    /**
     * @var array
     */
    protected $fillable = [];
}
