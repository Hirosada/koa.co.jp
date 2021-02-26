<?php

namespace App\Http\Controllers\Main;

use App\Models\CompanyProfile;
use App\Services\BusinessService;
use App\Services\CompanyProfileService;
use App\Services\NewsService;
use App\Todos;
use Illuminate\Http\Request;

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

    /**
     * getCampany
     */
    public function getCompanyProfile()
    {
        $companyProfileService = new CompanyProfileService();
        return $companyProfileService->getCompanyProfile();
    }
}
