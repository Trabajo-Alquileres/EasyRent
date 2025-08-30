<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasUlids;

    protected $table = 'cities';

    protected $fillable = [
        'city_name',
        'postal_code_id',
        'department_id',
    ];

    public function postalCode(): BelongsTo
    {
        return $this->belongsTo(PostalCode::class, 'postal_code_id');
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function locations(): HasMany
    {
        return $this->hasMany(Location::class, 'city_id');
    }
}
