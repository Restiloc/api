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
        'folder',
        'type',
        'isFinished',
        'signature',
        'signedByClient'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'isFinished' => 'boolean',
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
     * Get the client related to this mission.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne(Client::class, 'id', 'client_id');
    }

    /**
     * Check unavailability.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unavailability()
    {
        return $this->hasOne(Unavailability::class);
    }

    /**
     * Check pree.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pree()
    {
        return $this->hasMany(Pree::class);
    }
}
