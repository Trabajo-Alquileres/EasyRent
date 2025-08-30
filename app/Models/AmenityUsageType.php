<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AmenityUsageType extends Model
{
    use HasUlids;

    protected $table = 'amenity_usage_types';

    protected $fillable = [
        'usage_name',
        'usage_description',
    ];

    public function publicationAmenities(): HasMany
    {
        return $this->hasMany(PublicationAmenity::class, 'amenity_usage_type_id');
    }

}
