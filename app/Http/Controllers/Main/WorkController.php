<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\WorkService;
use APP\Repositories\WorkRepositoryInterface;

class WorkController extends Controller
{
    private $workService;
    // 店舗
    const STORE = 1;
    // 商業
    const COMMERCIAL = 2;
    // 文化施設
    const CULTURAL_FACILITY = 3;
    // リフォーム
    const REFORM = 4;
    // リノベーション
    const RENOVATION = 5;

    public function __construct(WorkService $workService)
    {
        $this->workService = $workService;
    }

    public function index()
    {
        // 店舗・商業の施工例情報を取得
        $arrConst = array(self::STORE, self::COMMERCIAL, self::CULTURAL_FACILITY);
        $arrConstructionOne = $this->workService->getWhereInConstruction($arrConst);
        // リフォーム・リノベーションの施工例情報を取得
        $arrConst = array(self::REFORM, self::RENOVATION);
        $arrConstructionTwo = $this->workService->getWhereInConstruction($arrConst);

        return view('works', compact(['arrConstructionOne', 'arrConstructionTwo']));
    }

}
