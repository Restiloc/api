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
            'licencePlate' => 'The licence plate is : ' . $this->licencePlate,
            'color' => 'Color : ' . $this->color,
            'releaseYear' => 'The release year : ' . $this->releaseYear,
            'label' => $this->label,
            'brand' => $this->brand
        ];
    }
}
