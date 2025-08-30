<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormStep extends Model
{
    protected $fillable = [
        'form_schema_id',
        'slug',
        'title',
        'description',
        'icon',
        'is_optional',
        'order',
    ];

    protected $casts = [
        'is_optional' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function formSchema(): BelongsTo
    {
        return $this->belongsTo(FormSchema::class);
    }
}
