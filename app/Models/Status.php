<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Status extends Model
{
    use HasUlids;

    protected $table = 'statuses';

    protected $fillable = [
        'status_name',
        'status_description',
    ];

    public function statusable(): MorphTo
    {
        return $this->morphTo();
    }
}
