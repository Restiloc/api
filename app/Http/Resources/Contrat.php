<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Contrat extends JsonResource
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
            'numeroContrat' => $this->numeroContrat,
            'dateDebut' => $this->dateDebut,
            'dateFin' => $this->dateFin,
            'degreeFranchise' => $this->degreeFranchise,
            'url' => route('contrats.index') . "/" . $this->id,
            'assurence' => new Assurence($this->assurence),
        ];
    }
}
