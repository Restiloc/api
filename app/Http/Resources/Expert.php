<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Expert extends JsonResource
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
            'lastName' => $this->lastName,
            'firstName' => $this->firstName,
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber,
            'username' => $this->username,
            'missions' => Mission::collection($this->missions),
        ];
    }
}
