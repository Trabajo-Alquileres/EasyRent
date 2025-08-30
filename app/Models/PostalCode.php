<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostalCode extends Model
{
    use HasUlids;

    protected $table = 'postal_codes';

    protected $fillable = [
        'postal_code',
    ];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'postal_code_id');

    }
}
