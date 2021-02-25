<?php

namespace App\Repositories;

use App\Libs\KV;
use App\Libs\Arr;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

abstract class BaseRepository
{
    /** @var array 並び順 */
    protected array $orderBys = [
    ];

    /**
     * __construct
     */
    public function __construct()
    {
    }

}