<?php

namespace App\Repositories;

use App\Models\ConstructionContents;
use App\Models\Construction;
use App\Models\ConstructionProperty;
use phpDocumentor\Reflection\Types\Self_;

class WorkRepository extends BaseRepository
{
    protected $construction;
    protected $constructionProperty;

    public function __construct(Construction $construction, ConstructionProperty $constructionProperty)
    {
        $this->construction = $construction;
        $this->constructionProperty = $constructionProperty;
    }
    /**
     * getAllConstruction
     *
     */
    public function getAllConstruction()
    {
        return $this->constructionProperty->all();
    }

    public function getWhereInConstruction($arrConstruction)
    {
        return $this->constructionProperty->whereIn('construction_id', $arrConstruction)->get();
    }
}