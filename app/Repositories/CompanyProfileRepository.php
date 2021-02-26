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
        $companyProfile = CompanyProfile::get()->toArray();
        $suppliers = CompanyProfile::find(1)->getSuppliers;

        return $list = [
                'aboutUs' => $companyProfile,
                'suppliers' => $suppliers
                ];
    }
}