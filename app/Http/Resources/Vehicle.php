<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Vehicle extends JsonResource
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
            'licencePlate' => 'Vehicle licence plate : ' . $this->licencePlate,
            'color' => 'The vehicle color is : ' . $this->color,
            'releaseYear' => 'The release year is : ' . $this->releaseYear
        ];
    }
}
