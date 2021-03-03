<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ConstructionContents extends Model
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

    public function construction()
    {
        return $this->belongsTo('App\Models\Construction', 'construction_id');
    }

    public function constructionProperty()
    {
        return $this->belongsTo(ConstructionProperty::class, 'construction_contents_id');
    }
}
