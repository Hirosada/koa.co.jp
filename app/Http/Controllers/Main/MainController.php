<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Todos;
use App\Models\CompanyProfile;
use App\Services\NewsService;
use App\Services\BusinessService;

class MainController extends Controller
{
    /**
     * index
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = $this->getAllNews();
        $service = $this->getService();

        return view('top', [
            'newsList' => $news,
            'businessList' => $service,
        ]);
    }

    /**
     * getAllNews
     */
    public function getAllNews()
    {
        $newsService = new NewsService();
        return $newsService->getAllNews();
    }

    /**
     * getAllNews
     */
    public function getService()
    {
        $businessService = new BusinessService();
        return $businessService->getService();
    }

}
