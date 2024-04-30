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
            'customer_type' => $this->type,
            'services_name' => $this->service,
            'message' => $this->message,
            'location' => $this->location,
            'status' => $this->status,
        ];
    }
}
