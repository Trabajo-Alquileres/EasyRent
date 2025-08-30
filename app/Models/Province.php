<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    use HasUlids;

    protected $table = 'provinces';

    protected $fillable = [
        'province_name',
        'country_id',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function departments(): HasMany
    {
        return $this->hasMany(Department::class, 'province_id', 'id');
    }
}
