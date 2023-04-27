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
            'id' => $this->id,
            'licencePlate' => $this->licencePlate,
            'color' => $this->color,
            'releaseYear' => $this->releaseYear,
            'route' => route('vehicles.index') . "/" . $this->id,
            'missions' => Mission::collection($this->whenLoaded('missions')),
            'model' => $this->model,
            'company' => $this->company,
            'contrat' => new Contrat($this->contrat)
        ];
    }
}
