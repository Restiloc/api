<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'contractNumber',
        'dateDebut',
        'dateFin',
        'degreeFranchise'
    ];

    /**
     * Get the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function insurance()
    {
        return $this->belongsTo(Insurance::class, 'insurance_id', 'id');
    }
}
