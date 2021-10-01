<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Foundation\Auth\User as Authenticatable;

// class Contact extends Authenticatable
// {
//     /** @var string */
//     protected $table = 'contact';

//     /** @var string */
//     protected $primaryKey = 'contact_id';

//     /** @var bool */
//     public $incrementing = false;

//     /** @var string[] 日付を変形する属性 */
//     protected $dates = [
//         'form1_updated_at',
//         'establishment_of_corporation',
//         'founded',
//     ];

// }



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $table = 'form';

    protected $fillable = [
        'name',
        'subname',
        'confemail',
        'tel',
        'company',
        'departmant',
        'postalCode',
        'address',
        'aderess2',
        'subadress',
        'inquiry',
    ];
}