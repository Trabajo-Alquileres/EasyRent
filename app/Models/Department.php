<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use HasUlids;

    protected $table = 'departments';

    protected $fillable = [
        'department_name',
        'province_id',
    ];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'department_id');
    }
}
