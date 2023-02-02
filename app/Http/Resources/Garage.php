<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Garage extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'addressNumber' => $this->addressNumber,
            'street' => $this->street,
            'postalCode' => $this->postalCode,
            'city' => $this->city,
            'phoneNumber' => $this->phoneNumber,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'missions' => Mission::collection($this->missions),
        ];
    }
}
