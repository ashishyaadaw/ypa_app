<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StreetPlayArtistResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'dob' => $this->dob,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'zip_code' => $this->zip_code,
            'country' => $this->country,
            'preferred_role' => $this->preferred_role,
            'experience_level' => $this->experience_level,
            'skills' => $this->skills,
            'previous_performances' => $this->previous_performances,
            'motivation' => $this->motivation,
            'file_path' => $this->file_path,
            'status' => $this->status,
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
    }
}
