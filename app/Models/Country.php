<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasUlids;

    protected $table = 'countries';

    protected $fillable = [
        'country_name',
    ];

    public function provinces(): HasMany
    {
        return $this->hasMany(Province::class, 'country_id', 'id');
    }

}
