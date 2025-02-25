<?php


namespace Modules\EntityRecords\Repositories;

use App\Repositories\BaseRepository;
use Modules\EntityRecords\Models\EntityRecord;
use Modules\EntityRecords\Repositories\Interfaces\EntityRecordRepositoryInterface;
use Modules\EntityRecordValues\Models\EntityRecordValue;

class EntityRecordRepository extends BaseRepository implements EntityRecordRepositoryInterface
{   
    protected $entityRecord;
    protected $entityRecordValue;
    public function __construct(EntityRecord $entityRecord , EntityRecordValue $entityRecordValue)
    {
        parent::__construct($entityRecord);
        $this->entityRecord = $entityRecord;
        $this->entityRecordValue = $entityRecordValue;

        
    }
    
    public function createEntityRecord($data)
    {
        $record = $this->entityRecord->create([
            'entity_id' => $data['entity_id'],
            'operator_id' =>auth()->user()->id,
        ]);
        foreach ($data['attributes'] as $attributeId => $value) {
            $this->entityRecordValue->create([
                'entity_record_id' => $record->id,
                'custom_attribute_id' => $attributeId,
                'value' => $value,
            ]);
        }
        return $record->load('values');
    }

    public function getAllRecordsByEntity($entityId)
    {
        return $this->entityRecord->where('entity_id', $entityId)->with('values')->get();
    }

    public function getAllRecords()
    {
        return $this->entityRecord->with('values')->get();
    }
    public function getRecordById($recordId)
    {
        return $this->entityRecord->with('values')->findOrFail($recordId);
    }
}