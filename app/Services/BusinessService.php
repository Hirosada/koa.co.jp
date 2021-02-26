<?php

namespace App\Services;

use App\Repositories\BusinessRepository;

class BusinessService extends BaseService
{
    /**
     * getService
     *
     *
     */
    public function getService()
    {
        $businessRepository = new BusinessRepository();
        return $businessRepository->getService();
    }
}
