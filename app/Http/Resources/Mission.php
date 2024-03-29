<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Mission extends JsonResource
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
            'dateMission' => $this->dateMission,
            'startedAt' => $this->startedAt,
            'kilometersCounter' => $this->kilometersCounter,
            'folder' => $this->folder,
            'type' => $this->type,
            'isFinished' => $this->isFinished,
            'signature' => $this->signature,
            'signedByClient' => $this->signedByClient,
            'route' => route('missions.index') . "/" . $this->id,
            'vehicle' => new Vehicle($this->whenLoaded('vehicle')),
            'expert' => new Expert($this->whenLoaded('expert')),
            'garage' => new Garage($this->whenLoaded('garage')),
            'client' => new Client($this->whenLoaded('client')),
            'unavailability' => new Unavailability($this->whenLoaded('unavailability')),
            'pree' => Pree::collection($this->whenLoaded('pree')),
        ];
    }
}
