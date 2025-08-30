<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Phone extends Model
{
    use HasUlids;

    protected $fillable = [
        'phone_number',
        'phone_country_calling_code',
        'phone_verified',
        'phone_primary',
    ];

    public function phoneable(): MorphTo
    {
        return $this->morphTo();
    }

    public function phoneUsageTypes(): BelongsToMany
    {
        return $this->belongsToMany(PhoneUsageType::class, 'phone_type_usages');
    }

    public function messagingAppTypes(): BelongsToMany
    {
        return $this->belongsToMany(MessagingAppType::class, 'phone_messaging_app_types');
    }
}
