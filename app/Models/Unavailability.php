<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unavailability extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customerResponsible',
        'reason_id',
        'mission_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'customerResponsible' => 'boolean',
    ];

    /**
     * Get the reason for this Unavailability.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reason()
    {
        return $this->hasOne(Reason::class, 'id', 'reason_id');
    }

    /**
     * Get the missions for this Unavailability.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function missions()
    {
        return $this->hasMany(Mission::class, 'id', 'mission_id');
    }
}
