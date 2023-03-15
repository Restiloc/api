<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'lastName',
        'firstName',
        'email',
        'phoneNumber',
        'addressNumber',
        'postalCode',
        'street',
        'city',
        'latitude',
        'longitude',
    ];

    /**
     * Get the missions of the Client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function missions()
    {
        return $this->hasMany(Mission::class);
    }
}
