<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Client extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'lastName' => $this->lastName,
            'firstName' => $this->firstName,
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber,
            'addressNumber' => $this->addressNumber,
            'street' => $this->street,
            'postalCode' => $this->postalCode,
            'city' => $this->city,
            'url' => route('clients.index') . "/" . $this->id,
            'missions' => Mission::collection($this->whenLoaded('missions')),
        ];
    }
}
