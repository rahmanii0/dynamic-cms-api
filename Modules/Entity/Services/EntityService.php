<?php 

namespace Modules\Entity\Services;

use App\Services\BaseService;
use Modules\Entity\Repositories\Interfaces\EntityRepositoryInterface;


class EntityService extends BaseService
{

    public function __construct(EntityRepositoryInterface $entityRepository)
    {
        parent::__construct($entityRepository);
    }

   

}