<?php

namespace App\Repositories;

use App\Models\CompanyProfile;

class CompanyProfileRepository extends BaseRepository
{
    /**
     * getCompanyProfile
     * 
     */
    public function getCompanyProfile()
    {
        return CompanyProfile::get();
    }
}