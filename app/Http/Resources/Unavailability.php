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
            'id' => $this->id,
            'customerResponsible' => $this->customerResponsible ? true : false,
            'route' => route('unavailabilities.index') . "/" . $this->id,
            'missions' => Mission::collection($this->whenLoaded('missions')),
            'reason' => new Reason($this->whenLoaded('reason')),
        ];
    }
}
