<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dateMission',
        'startedAt',
        'kilometersCounter',
        'nameExpertFile',
    ];

    /**
     * Get the vehicle related to this mission.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehicle()
    {
        return $this->hasOne(Vehicle::class, 'id', 'vehicle_id');
    }

    /**
     * Get the expert related to this mission.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function expert()
    {
        return $this->hasOne(Expert::class, 'id', 'expert_id');
    }

    /**
     * Get the garage related to this mission.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function garage()
    {
        return $this->hasOne(Garage::class, 'id', 'garage_id');
    }

    /**
     * Check unavailability.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unavailability()
    {
        return $this->hasMany(Unavailability::class);
    }
}
