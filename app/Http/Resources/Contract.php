<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class contract extends JsonResource
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
            'contractNumber' => $this->contractNumber,
            'dateDebut' => $this->dateDebut,
            'dateFin' => $this->dateFin,
            'degreeFranchise' => $this->degreeFranchise,
            'url' => route('contracts.index') . "/" . $this->id,
            'insurance' => new Insurance($this->insurance),
        ];
    }
}
