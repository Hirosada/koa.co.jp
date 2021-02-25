<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class NewsImg extends BaseModel
{
    use Seq;
    use SoftDeletes;

    /** @var string */
    protected $table = 'news_img';

    /** @var string */
    protected $primaryKey = 'news_img_id';

    /** @var bool */
    public $incrementing = false;

    /** @var string[] 日付を変形する属性 */
    protected $dates = [
        'form1_updated_at',
    ];

}
