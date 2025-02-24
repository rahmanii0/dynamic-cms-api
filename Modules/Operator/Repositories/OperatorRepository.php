<?php

namespace Modules\Operator\Repositories;
use App\Repositories\BaseRepository;
use Modules\Operator\Models\Operator;
use Modules\Operator\Repositories\Interfaces\OperatorRepositoryInterface;





class OperatorRepository extends BaseRepository implements OperatorRepositoryInterface
{
    public function __construct(Operator $operator)
    {
        parent::__construct($operator);
    }
}
