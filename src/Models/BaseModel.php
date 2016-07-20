<?php
/**
 * Created by PhpStorm.
 * User: tungchung
 * Date: 6/2/16
 * Time: 3:23 PM
 */

namespace Seldat\Wms2\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public function freshTimestamp()
    {
        return time();
    }

    public function fromDateTime($value)
    {
        return $value;
    }

    public function getDateFormat()
    {
        return 'U'; // PHP date() Seconds since the Unix Epoch
    }
}