<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PublicationUser extends Model
{
    protected $table = 'publication_users';

    protected $fillable = [
        'publication_id',
        'user_id',
        'publication_role_id',
        'starting_date',
        'ending_date',
    ];

    public function publication(): BelongsTo
    {
        return $this->belongsTo(Publication::class, 'publication_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function publicationRole(): BelongsTo
    {
        return $this->belongsTo(PublicationRole::class, 'publication_role_id');
    }
}
