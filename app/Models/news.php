<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class News extends BaseModel
{
    use Seq;
    use SoftDeletes;

    /** @var string */
    protected $table = 'news';

    /** @var string */
    protected $primaryKey = 'news_id';

    /** @var bool */
    public $incrementing = false;

    /** @var string[] 日付を変形する属性 */
    protected $dates = [
        'form1_updated_at',
        'news_display_finished_at',
        'news_display_started_at',
    ];

}
