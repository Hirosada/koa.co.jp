<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Suppliers;

class CompanyProfile extends Authenticatable
{
    /** @var string */
    protected $table = 'company_profile';

    /** @var string */
    protected $primaryKey = 'company_id';

    /** @var bool */
    public $incrementing = false;

    /** @var string[] 日付を変形する属性 */
    protected $dates = [
        'form1_updated_at',
    ];

    /**
     * getSuppliers
     *
     * @return HasMany
     */
    public function getSuppliers(): HasMany
    {
        return $this->hasMany(
            Suppliers::class,
            'company_id',
            'company_id'
        )->orderBy('display_order', 'ASC');
    }

}
