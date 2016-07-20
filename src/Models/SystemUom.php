<?php
/**
 * Created by PhpStorm.
 * User: Sy Dai
 * Date: 22-Jun-16
 * Time: 10:49
 */

namespace Seldat\Wms2\Models;

/**
 * @property mixed created_at
 * @property mixed updated_at
 * @property mixed deleted_at
 * @property mixed sys_uom_id
 * @property mixed sys_uom_code
 * @property mixed sys_uom_name
 * @property mixed sys_uom_des
 * @property mixed created_by
 * @property mixed updated_by
 */
class SystemUom extends BaseSoftModel
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'system_uom';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'sys_uom_id';

    /**
     * @var array
     */
    protected $fillable = [
        'sys_uom_id',
        'sys_uom_code',
        'sys_uom_name',
        'sys_uom_des',
        'created_by',
        'updated_by',
    ];

    public function chargeCode()
    {
        return $this->hasOne('App\ChargeCode', 'sys_uom_id', 'sys_uom_id');
    }
}
