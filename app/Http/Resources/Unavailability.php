<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Unavailability extends JsonResource
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
            'customerResponsible' => 'Is the customer responsible ? ' . $this->customerResponsible,
            'mission_id' => 'Is the mission number : ' . $this->mission_id,
            'reason_id' => 'Is the reason number : ' . $this->reason_id
        ];
    }
}
