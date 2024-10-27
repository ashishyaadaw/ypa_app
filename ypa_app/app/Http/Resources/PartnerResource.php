<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PartnerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'name' => $this->name,
            'contents' => $this->contents,
            'href' => $this->href,
            'status' => $this->status,
            // 'created_at' => $this->created_at,

        ];
    }
}
