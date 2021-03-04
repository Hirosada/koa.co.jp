<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ConstructionProperty extends Model
{

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

    public function construction()
    {
        return $this->belongsTo('App\Models\Construction', 'construction_id');
    }

    public function constructionContents()
    {
        return $this->hasMany('App\Models\ConstructionContents', 'construction_contents_id');
    }
}
