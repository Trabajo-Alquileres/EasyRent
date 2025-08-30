<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FormSchema extends Model
{

    protected $fillable = [
        'name',
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
        return $this->hasMany(FormStep::class);
    }
}
