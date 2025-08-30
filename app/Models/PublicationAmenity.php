<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PublicationAmenity extends Model
{
    use HasUlids;

    protected $table = 'publication_amenities';

    protected $fillable = [
        'publication_id',
        'amenity_id',
        'amenity_usage_type_id',
    ];

    public function amenity(): BelongsTo
    {
        return $this->belongsTo(Amenity::class, 'amenity_id');
    }

    public function usageType(): BelongsTo
    {
        return $this->belongsTo(AmenityUsageType::class, 'amenity_usage_type_id');
    }

    public function publication(): BelongsTo
    {
        return $this->belongsTo(Publication::class, 'publication_id');
    }
}
