<?php

namespace App\Repositories;

use App\Contracts\FormSchemaInterface;
use App\Models\FormSchema;
use Illuminate\Database\Eloquent\Collection;

class FormSchemaRepository implements FormSchemaInterface
{
    protected FormSchema $model;

    public function __construct(FormSchema $model)
    {
        $this->model = $model;
    }

    /**
     * Obtener todos los registros
     */
    public function getAllSchemas(): Collection
    {
        return $this->model->with('steps')->get();

    }
}