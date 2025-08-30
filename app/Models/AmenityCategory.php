<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AmenityCategory extends Model
{
    use HasUlids;

    protected $table = 'amenity_categories';

    protected $fillable = [
        'category_name',
        'category_description',
    ];

    public function amenities(): HasMany
    {
        return $this->hasMany(Amenity::class, 'amenity_category_id');
    }

}
