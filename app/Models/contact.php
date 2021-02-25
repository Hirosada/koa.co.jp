<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends BaseModel
{
    use Seq;
    use SoftDeletes;

    /** @var string */
    protected $table = 'contact';

    /** @var string */
    protected $primaryKey = 'contact_id';

    /** @var bool */
    public $incrementing = false;

    /** @var string[] 日付を変形する属性 */
    protected $dates = [
        'form1_updated_at',
        'establishment_of_corporation',
        'founded',
    ];

}
