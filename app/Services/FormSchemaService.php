<?php

namespace App\Services;

use App\Contracts\FormSchemaInterface;
use Illuminate\Database\Eloquent\Collection;

class FormSchemaService
{
    protected FormSchemaInterface $repository;

    public function __construct(FormSchemaInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Obtener todos los esquemas de formulario
     */
    public function getAllSchemas(): Collection
    {
        return $this->repository->getAllSchemas();
    }
}