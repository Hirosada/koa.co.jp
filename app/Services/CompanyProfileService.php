<?php

namespace App\Services;

use App\Repositories\CompanyProfileRepository;

class CompanyProfileService extends BaseService
{
    /**
     * getCompanyProfile
     *
     *
     */
    public function getCompanyProfile()
    {
        $companyProfileRepository = new CompanyProfileRepository();
        return $companyProfileRepository->getCompanyProfile();
    }
}
