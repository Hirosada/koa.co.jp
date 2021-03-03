<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    /** @var string */
    protected $table = 'business';

    /** @var string */
    protected $primaryKey = 'business_id';

    /** @var bool */
    public $incrementing = false;

    /** @var string[] 日付を変形する属性 */
    protected $dates = [
        'form1_updated_at',
    ];

}
