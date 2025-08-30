<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeatureInvetoryPublication extends Model
{
    use HasUlids;
    protected $table = 'feature_invetory_publications';

    protected $fillable = [
        'feature_invetory_publication_value',
        'feature_invetory_id',
        'publication_id',
    ];

    public function featureInvetory(): BelongsTo
    {
        return $this->belongsTo(FeatureInvetory::class, 'feature_invetory_id');
    }

    public function publication(): BelongsTo
    {
        return $this->belongsTo(Publication::class, 'publication_id');
    }
}
