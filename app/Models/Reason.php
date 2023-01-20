<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'label',
    ];

    /**
     * Get the unavailabilities of this Reason.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unavailabilities()
    {
        return $this->hasMany(Unavailability::class);
    }
}
