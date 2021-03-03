<?php

namespace App\Services;

use App\Repositories\WorkRepository;

class WorkService extends BaseService
{
    protected $WorkRepository;
    public function __construct(WorkRepository $workRepository)
    {
        $this->workRepository = $workRepository;
    }
    /**
     * WorkService
     *
     *
     */
    public function getAllConstruction()
    {
        // $workRepository = new WorkRepository();
        return $this->workRepository->getAllConstruction();
    }

    public function getWhereInConstruction($arrConst)
    {
        return $this->workRepository->getWhereInConstruction($arrConst);
    }
}