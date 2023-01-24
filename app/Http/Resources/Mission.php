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
            'dateMission' => 'The date of the mission is : ' . $this->dateMission,
            'startedAt' => 'The mission start at : ' . $this->startedAt . ' hour.',
            'kilometersCounter' => 'The kilometers counter show : ' . $this->kilometersCounter . ' km.',
            'nameExpertFile' => 'The file of expert is : ' . $this->nameExpertFile,
            'isFinished' => 'Is the mission finished ? ' . $this->isFinished,
            'vehicle_id' => 'Is the vehicle number : ' . $this->vehicle_id,
            'expert_id' => 'Is the expert number : ' . $this->expert_id,
            'garage_id' => 'Is the garage number : ' . $this->garage_id
        ];
    }
}
