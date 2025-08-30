<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MessagingAppType extends Model
{
    use HasUlids;

    protected $table = 'messaging_app_types';

    protected $fillable = [
        'messaging_app_type_name'
    ];

    public function phones(): BelongsToMany
    {
        return $this->belongsToMany(Phone::class, 'phone_messaging_app_types');
    }
}
