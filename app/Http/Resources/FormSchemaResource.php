<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FormSchemaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->ulid ?? $this->id,
            'slug' => $this->slug,
            'title' => $this->title,
            'is_active' => (bool) $this->is_active,
            'version' => $this->schema_version ?? ($this->updated_at?->timestamp ?? now()->timestamp),
            'steps' => FormStepResource::collection($this->whenLoaded('steps')),
            'metadata' => $this->when(isset($this->metadata), $this->metadata),
        ];
    }
}
