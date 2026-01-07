<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FormSchemaService;
use App\Http\Resources\FormSchemaResource;
use Illuminate\Http\JsonResponse;

class FormSchemaController extends Controller
{
    protected FormSchemaService $service;

    public function __construct(FormSchemaService $service)
    {
        $this->service = $service;
    }

    public function index(): JsonResponse
    {
        $schemas = $this->service->getAllSchemas();
        
        return response()->json([
            'data' => FormSchemaResource::collection($schemas)->additional([
                'message' => 'Form schemas retrieved successfully.',
                'success' => true,
            ])
        ]);
    }
}
