<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ControlResource extends JsonResource
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
            'category' => $this->category,
            'description' => $this->description,
            'file_path' => $this->file_path,
            'link' => $this->link,
            'other' => $this->other,
            'status' => $this->status,
            // 'created_at' => $this->created_at,

        ];
    }
}
