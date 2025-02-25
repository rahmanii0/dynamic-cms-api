<?php


namespace Modules\EntityRecords\Repositories;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Cache;
use Modules\CustomAttributes\Models\CustomAttributes;
use Modules\EntityRecords\Models\EntityRecord;
use Modules\EntityRecordValues\Models\EntityRecordValue;
use Modules\EntityRecords\Repositories\Interfaces\EntityRecordRepositoryInterface;

class EntityRecordRepository extends BaseRepository implements EntityRecordRepositoryInterface
{   
    protected $entityRecord;
    protected $entityRecordValue;
    protected $customAttributes;
    public function __construct(EntityRecord $entityRecord , EntityRecordValue $entityRecordValue, CustomAttributes $customAttributes)
    {
        parent::__construct($entityRecord);
        $this->entityRecord = $entityRecord;
        $this->entityRecordValue = $entityRecordValue;
        $this->customAttributes= $customAttributes;

        
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
        Cache::forget("entity_attributes_{$data['entity_id']}");

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
    public function getCachedCustomAttributes($entityId)
    {
        return Cache::rememberForever("entity_attributes_{$entityId}", function () use ($entityId) {
            return $this->customAttributes->where('entity_id', $entityId)->get();
    });
}
}