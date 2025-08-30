<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasUlids;

    protected $table = 'images';

    protected $fillable = [
        'image_path',
        'image_order',
        'image_type_id'
    ];

    public function imageType(): BelongsTo
    {
        return $this->belongsTo(ImageType::class, 'image_type_id');
    }

    public function imageable()
    {
        return $this->morphTo();
    }

}
