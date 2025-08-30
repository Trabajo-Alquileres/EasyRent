<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Amenity extends Model
{
    use HasUlids;

    protected $table = 'amenities';

    protected $fillable = [
        'amenity_name',
        'amenity_description',
        'amenity_category_id',
    ];

    public function amenityCategory(): BelongsTo
    {
        return $this->belongsTo(AmenityCategory::class, 'amenity_category_id');
    }

    public function publicationAmenities(): HasMany
    {
        return $this->hasMany(PublicationAmenity::class, 'amenity_id');
    }


}
