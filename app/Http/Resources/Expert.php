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
            'name' => 'The expert name is : ' . $this->name,
            'firstName' => 'The expert pseudo : ' . $this->firstName,
            'email' => 'The expert email : ' . $this->email,
            'phoneNumber' => 'Phone number : ' . $this->phoneNumber,
            'username' => 'The expert username is : ' . $this->username
        ];
    }
}
