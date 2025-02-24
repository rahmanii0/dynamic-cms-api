<?php

namespace Modules\Entity\Repositories;
use Modules\Entity\Models\Entity;
use App\Repositories\BaseRepository;
use Modules\Entity\Repositories\Interfaces\EntityRepositoryInterface;

class EntityRepository extends BaseRepository implements EntityRepositoryInterface
{
    public function __construct(Entity $entity)
    {
        parent::__construct($entity);
    }
    
 
}
