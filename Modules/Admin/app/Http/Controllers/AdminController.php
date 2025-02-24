<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Services\AdminService;
use Modules\Entity\Http\Requests\EntityRequest;
use Modules\Entity\Http\Requests\EntityUpdateRequest;
use Modules\Operator\Http\Requests\CreateOperatorRequest;
use Modules\Operator\Http\Requests\UpdateOperatorRequest;
use Modules\CustomAttributes\Http\Requests\CustomAttributesRequest;
use Modules\CustomAttributes\Http\Requests\UpdateCustomAttributesRequest;

class AdminController extends Controller
{

    protected $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }


    //Admins controlling operators
    public function getAllOperators($perPage = 10)
    {
        return response()->json($this->adminService->getAllOperators($perPage));
    }
    public function getOperatorById($id)
    {
        return response()->json($this->adminService->getOperatorById($id), 200);
    }

    public function createOperator(CreateOperatorRequest $request)
    {
        return response()->json($this->adminService->createOperator($request->all()), 201);
    }

    public function updateOperator(UpdateOperatorRequest $request, $id)
    {
        return response()->json($this->adminService->updateOperator($id, $request->all()), 200);
    }

    public function deleteOperator($id)
    {
        return response()->json(['deleted' => $this->adminService->deleteOperator($id)], 200);
    }

    // Admins controlling entities
    public function getAllEntities()
    {
        return response()->json($this->adminService->getAllEntities());
    }

    public function getEntityById($id)
    {
        return response()->json($this->adminService->getEntityById($id), 200);
    }

    public function createEntity(EntityRequest $request)
    {
        return response()->json($this->adminService->createEntity($request->all()), 201);
    }

    public function updateEntity(EntityUpdateRequest $request, $id)
    {
        return response()->json($this->adminService->updateEntity($id, $request->all()), 200);
    }

    public function deleteEntity($id)
    {
        return response()->json(['deleted' => $this->adminService->deleteEntity($id)], 200);
    }


    //Admins controlling custom attributes

    public function getAllCustomAttributes($perPage = 10)
    {
        return response()->json($this->adminService->getAllCustomAttributes($perPage));
    }

    public function getCustomAtrributeById($id)
    {
        return response()->json($this->adminService->getCustomAtrributeById($id), 200);
    }

    public function createCustomAttribute(CustomAttributesRequest $request)
    {
        return response()->json($this->adminService->createCustomAttribute($request->all()), 201);  
    }

    public function updateCustomAttribute(UpdateCustomAttributesRequest $request, $id)
    {
        return response()->json($this->adminService->updateCustomAttribute($id, $request->all()), 200);
    }

    public function deleteCustomAttribute($id)
    {
        return response()->json(['deleted' => $this->adminService->deleteCustomAttribute($id)], 200);
    }
    public function assignCustomAttributeToEntity(Request $request)
    {
        $customAttribute = $this->adminService->assignCustomAttributeToEntity($request->entity_id, $request->custom_attribute_id);
        return response()->json($customAttribute, 201);

    }
}
