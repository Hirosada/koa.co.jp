<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ConstructionProperty extends BaseModel
{
    use Seq;
    use SoftDeletes;

    /** @var string */
    protected $table = 'construction_property';

    /** @var string */
    protected $primaryKey = 'construction_property_id';

    /** @var bool */
    public $incrementing = false;

    /** @var string[] 日付を変形する属性 */
    protected $dates = [
        'form1_updated_at',
    ];

}
