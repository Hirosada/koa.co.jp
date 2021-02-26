<?php

namespace App\Repositories;

use App\Models\Business;

class BusinessRepository extends BaseRepository
{
    /**
     * getService
     * 
     */
    public function getService()
    {
        return Business::get();
    }
}