<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
class Publication extends Model
{
    use HasUlids;

    protected $table = 'publications';

    protected $fillable = [
        'publication_title',
        'publication_description',
        'publication_price',
        'publication_floor_number',
        'publication_department_number',
        'property_id',
        'publication_group_id',
        'property_sub_type_id',
    ];

    public function statuses(): MorphMany
    {
        return $this->morphMany(Status::class, 'statusable');
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function publicationGroup(): BelongsTo
    {
        return $this->belongsTo(PublicationGroup::class, 'publication_group_id');
    }

    public function propertySubType(): BelongsTo
    {
        return $this->belongsTo(PropertySubType::class, 'property_sub_type_id');
    }

    public function tenantTypes(): BelongsToMany
    {
        return $this->belongsToMany(TenantType::class, 'publication_tenant_type');
    }

    public function publicationAmenities(): HasMany
    {
        return $this->HasMany(PublicationAmenity::class, 'publication_id');
    }

    public function featureInvetoryPublications(): HasMany
    {
        return $this->hasMany(FeatureInvetoryPublication::class, 'publication_id');
    }

    public function publicationUsers(): HasMany
    {
        return $this->hasMany(PublicationUser::class, 'publication_id');
    }
}
