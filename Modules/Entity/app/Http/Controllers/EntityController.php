<?php

namespace Modules\Entity\Http\Controllers;


use Illuminate\Routing\Controller;
use Modules\Entity\Services\EntityService;

class EntityController extends Controller
{
    protected $entityService;

    public function __construct(EntityService $entityService)
    {
        $this->entityService = $entityService;
    }

    public function getAllEntities()
    {
        return $this->entityService->getAll();
    }

    

}
