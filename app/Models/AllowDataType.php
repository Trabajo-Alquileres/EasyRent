<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AllowDataType extends Model
{
    use HasUlids;

    protected $table = 'allow_data_types';

    protected $fillable = [
        'allow_data_type_value',
    ];

    public function featureInvetories(): HasMany
    {
        return $this->hasMany(FeatureInvetory::class, 'allow_data_type_id');
    }
}
