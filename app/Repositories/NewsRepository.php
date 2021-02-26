<?php

namespace App\Repositories;

use App\Models\News;

class NewsRepository extends BaseRepository
{
    /**
     * getAllNews
     * 
     */
    public function getAllNews()
    {
        return News::get();
    }
}