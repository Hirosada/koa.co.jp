<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class construction extends Model
{
    /** @var string */
    protected $table = 'construction';

    /** @var string */
    protected $primaryKey = 'construction_id';

    /** @var bool */
    public $incrementing = false;

    /** @var string[] 日付を変形する属性 */
    protected $dates = [
        'form1_updated_at',
    ];

    /**
     * 
     * @return HasMany
     */
    public function constructionProperty()
    {
        dd($this->hasMany(ConstructionProperty::class, 'construction_id'));
        return $this->hasMany(ConstructionProperty::class, 'construction_id');
    }

}
