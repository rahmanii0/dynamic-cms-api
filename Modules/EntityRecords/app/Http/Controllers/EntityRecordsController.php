<?php

namespace Modules\EntityRecords\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\EntityRecords\Services\EntityRecordService;

class EntityRecordsController extends Controller
{
    protected $entityRecordService;

    public function __construct(EntityRecordService $entityRecordService)
    {
        $this->entityRecordService = $entityRecordService;
    }

    public function createEntityRecord(Request $request)
    {
        $record = $this->entityRecordService->createEntityRecord($request->all());
        return response()->json(['message' => 'Record created successfully', 'data' => $record], 201);
    }

    public function getAllRecordsByEntity($entity_id){
        return $this->entityRecordService->getAllRecordsByEntity($entity_id);
        return response()->json(['data' => $record], 200);

    }

    public function getAllRecords()
    {
        return $this->entityRecordService->getAllRecords();
    }

    public function getRecordById($record_id)
    {
        $record=$this->entityRecordService->getRecordById($record_id);
        return response()->json(['data' => $record], 200);

    }
}