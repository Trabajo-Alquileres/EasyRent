<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class ImageType extends Model
{
    use HasUlids;

    protected $table = 'image_types';

    protected $fillable = [
        'image_type_value'
    ];

    public function images()
    {
        return $this->hasMany(Image::class, 'image_type_id');
    }
}
