<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface FormSchemaInterface
{
    public function getAllSchemas(): Collection;
}
