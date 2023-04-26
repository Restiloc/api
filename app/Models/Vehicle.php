<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'licencePlate',
        'color',
        'releaseYear',
        'contract_company_id',
        'contractNumber',
        'contract_guarantee_level_id',
        'contractEndDate',
        'vehicle_state_id', 
        'vehicle_model_id',
    ];

    /**
     * Get the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function model()
    {
        return $this->belongsTo(VehicleModel::class, 'vehicle_model_id', 'id');
    }

    /**
     * Get the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(Company::class, 'contract_company_id', 'id');
    }

    /**
     * Get the missions for the Vehicle.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function missions()
    {
        return $this->hasMany(Mission::class);
    }

    /**
     * Get the state of the Vehicle.
     */
    public function state()
    {
        return $this->belongsTo(VehicleState::class, 'vehicle_state_id', 'id');
    }

    public function guarantee()
    {
        return $this->belongsTo(GuaranteeLevel::class, 'contract_guarantee_level_id', 'id');
    }
}
