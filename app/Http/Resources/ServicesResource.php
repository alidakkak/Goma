<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServicesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'customer_type' => $this->customer_type,
            'services_name' => $this->services_name,
            'message' => $this->message,
            'link' => $this->link,
            'location' => $this->location,
            'status' => $this->status,
        ];
    }
}
