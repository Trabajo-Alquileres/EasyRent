<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PublicationRole extends Model
{
    use HasUlids;

    protected $table = 'publication_roles';

    protected $fillable = [
        'publication_role_name',
        'publication_role_description',
    ];

    public function publicationUsers(): HasMany
    {
        return $this->hasMany(PublicationUser::class, 'publication_role_id');
    }
}
