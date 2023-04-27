<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Assurence extends JsonResource
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
            'nom' => $this->nom,
            'addressNumber' => $this->addressNumber,
            'street' => $this->street,
            'postalCode' => $this->postalCode,
            'city' => $this->city,
            'phoneNumber' => $this->phoneNumber,
            'url' => route('assurences.index') . "/" . $this->id,
        ];
    }
}
