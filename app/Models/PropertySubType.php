<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertySubType extends Model
{
    use HasUlids;

    protected $table = 'property_sub_types';

    protected $fillable = [
        'property_sub_type_name',
        'property_sub_type_description'
    ];

    public function propertyType(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class, 'property_type_id');
    }
}
