<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'numeroContrat',
        'dateDebut',
        'dateFin',
        'degreeFranchise'
    ];

    /**
     * Get the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assurence()
    {
        return $this->belongsTo(Assurence::class, 'assurence_id', 'id');
    }
}
