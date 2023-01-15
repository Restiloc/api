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
    ];

    /**
     * Get the reason for this Unavailability.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reason()
    {
        return $this->hasOne(Reason::class);
    }

    /**
     * Get the mission for this Unavailability.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mission()
    {
        return $this->hasOne(Mission::class);
    }
}
