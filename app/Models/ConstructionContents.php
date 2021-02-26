<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ConstructionContents extends Authenticatable
{
    /** @var string */
    protected $table = 'construction_contents';

    /** @var string */
    protected $primaryKey = 'construction_contents_id';

    /** @var bool */
    public $incrementing = false;

    /** @var string[] 日付を変形する属性 */
    protected $dates = [
        'form1_updated_at',
    ];

}
