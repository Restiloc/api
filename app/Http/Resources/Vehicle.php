<?php

namespace App\Http\Resources;

use App\Models\Company;
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
            'id' => $this->id,
            'licencePlate' => $this->licencePlate,
            'color' => $this->color,
            'releaseYear' => $this->releaseYear,
            'route' => route('vehicles.index') . "/" . $this->id,
            'missions' => Mission::collection($this->whenLoaded('missions')),
            'model' => new VehicleModel($this->whenLoaded('model')),
            'company' => $this->company
        ];
    }
}
