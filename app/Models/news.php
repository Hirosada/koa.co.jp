<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\NewsImg;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class News extends Authenticatable
{
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

    /**
     * getNewsImg
     *
     * @return HasMany
     */
    public function getNewsImg(): HasMany
    {
        return $this->hasMany(
            NewsImg::class,
            'news_id',
            'news_id'
        )->orderBy('news_id', 'ASC');
    }


}
