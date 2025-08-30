<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyType extends Model
{
    use HasUlids;

    protected $table = 'property_types';

    protected $fillable = [
        'property_type_name',
        'property_type_description'
    ];

    public function PropertySubTypes(): HasMany
    {
        return $this->hasMany(PropertySubType::class, 'property_type_id');
    }

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_type_id');
    }
}
