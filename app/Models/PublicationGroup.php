<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PublicationGroup extends Model
{

    use HasUlids;

    protected $table = 'publication_groups';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
