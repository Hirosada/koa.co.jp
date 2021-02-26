<?php

namespace App\Services;

use App\Repositories\NewsRepository;

class NewsService extends BaseService
{
    /**
     * NewsService
     *
     *
     */
    public function getAllNews()
    {
        $newsRepository = new NewsRepository();
        return $newsRepository->getAllNews();
    }
}
