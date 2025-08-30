<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TenantType extends Model
{
    use HasUlids;

    protected $table = 'tenant_types';

    protected $fillable = [
        'tenant_type_name',
        'tenant_type_description',
    ];

    public function publications(): BelongsToMany
    {
        return $this->belongsToMany(Publication::class, 'publication_tenant_type');
    }
}
