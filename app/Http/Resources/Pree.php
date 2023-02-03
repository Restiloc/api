<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Pree extends JsonResource
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
            'label' => $this->label,
            'description' => $this->description,
            'image' => $this->image,
            'signature' => $this->signature,
            'route' => route('pree.index') . "/" . $this->id,
            'mission' => new Mission($this->whenLoaded('mission')),
        ];
    }
}
