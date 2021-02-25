<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyProfile extends BaseModel
{
    use Seq;
    use SoftDeletes;

    /** @var string */
    protected $table = 'company_profile';

    /** @var string */
    protected $primaryKey = 'company_profile_id';

    /** @var bool */
    public $incrementing = false;

    /** @var string[] 日付を変形する属性 */
    protected $dates = [
        'form1_updated_at',
    ];

}
