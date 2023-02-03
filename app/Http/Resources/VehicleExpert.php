<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VehicleExpert extends JsonResource
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
            'licencePlate' => $this->licencePlate,
            'color' => $this->color,
            'releaseYear' => $this->releaseYear,
            'label' => $this->label,
            'brand' => $this->brand,
            'route' => route('expertises.index'),
            'mission' => new Mission($this->whenLoaded('mission')),
        ];
    }
}
