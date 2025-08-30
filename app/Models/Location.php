<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasUlids;

    protected $table = 'locations';

    protected $fillable = [
        'latitude',
        'longitude',
        'street_name',
        'street_number',
        'address',
        'block_number',
        'lot_number',
        'full_address',
    ];

    public function city(): belongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'location_id');
    }

}
