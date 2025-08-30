<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PhoneUsageType extends Model
{
    use HasUlids;

    protected $table = 'phone_usage_types';

    protected $fillable = [
        'phone_usage_type_name',
    ];

    public function phones(): BelongsToMany
    {
        return $this->belongsToMany(Phone::class, 'phone_type_usages');
    }
}
