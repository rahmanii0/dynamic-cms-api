<?php 

namespace Modules\CustomAttributes\Services;

use App\Services\BaseService;
use Modules\CustomAttributes\Repositories\Interfaces\CustomAttributesRepositoryInterface;

class CustomAttributesService extends BaseService
{
    protected $customAttributesRepository;

    public function __construct(CustomAttributesRepositoryInterface $customAtrributesRepository)
    {
        // dd($customAtrributesRepository);

        parent::__construct($customAtrributesRepository);

        $this->customAttributesRepository = $customAtrributesRepository;

        
    }

    public function assignCustomAttributeToEntity($entityId, $customAttributeId)
    {

        return $this->customAttributesRepository->assignCustomAttributeToEntity($entityId, $customAttributeId);
    }


    

   

}