<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FeatureInvetory extends Model
{
    use HasUlids;

    protected $table = 'feature_invetories';

    protected $fillable = [
        'feature_inventory_name',
        'feature_inventory_description',
        'allow_data_type_id',
    ];

    public function allowDataType(): BelongsTo
    {
        return $this->belongsTo(AllowDataType::class, 'allow_data_type_id');
    }

    public function featureInvetoryPublications(): HasMany
    {
        return $this->hasMany(FeatureInvetoryPublication::class, 'feature_invetory_id');
    }
}
