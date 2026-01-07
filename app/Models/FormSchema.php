<?php

namespace App\Models;

use App\Models\Traits\HasSchemaVersionTrait;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FormSchema extends Model
{

    use HasUlids;

    protected $fillable = [
        'slug',
        'title',
        'description',
        'is_active',
        'metadata',
    ];

    protected $casts = [
        'metadata' => 'array',
    ];

    public function steps(): HasMany
    {
        return $this->hasMany(FormStep::class, 'form_schema_id');
    }
}
