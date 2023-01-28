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
            'name' => 'Garage : ' . $this->name,
            'addressNumber' => 'Address number : ' . $this->addressNumber,
            'street' => 'Street : ' . $this->street,
            'postalCode' => 'Postal Code : ' . $this->postalCode,
            'city' => 'City : ' . $this->city,
            'phoneNumber' => 'Phone number : ' . $this->phoneNumber,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ];
    }
}
