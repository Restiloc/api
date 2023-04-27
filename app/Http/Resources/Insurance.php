<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Insurance extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'addressNumber' => $this->addressNumber,
            'street' => $this->street,
            'postalCode' => $this->postalCode,
            'city' => $this->city,
            'phoneNumber' => $this->phoneNumber,
            'url' => route('insurances.index') . "/" . $this->id,
        ];
    }
}
