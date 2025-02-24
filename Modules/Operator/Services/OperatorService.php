<?php

namespace Modules\Operator\Services;

use App\Services\BaseService;
use Modules\Operator\Repositories\Interfaces\OperatorRepositoryInterface;

class OperatorService extends BaseService
{

    public function __construct(OperatorRepositoryInterface $operatorRepository)
    {
        parent::__construct($operatorRepository);
    }
}