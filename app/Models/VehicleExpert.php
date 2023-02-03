<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleExpert extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $table = "view_vehicle_expert";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'licencePlate',
        'color',
        'releaseYear',
        'label',
        'brand'
    ];

    /**
     * Get the missions for the VehicleExpert.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mission()
    {
        return $this->belongsTo(Mission::class);
    }
}
