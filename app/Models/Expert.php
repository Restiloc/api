<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Expert extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The rules for validation.
     *
     * @var array<int, string>
     */
    protected $rules = [
        'email' => 'email|unique:experts,email',
        'username' => 'string|unique:experts,username'
    ];

    /**
     * Get the missions owned by the Expert.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function missions()
    {
        return $this->hasMany(Mission::class);
    }

    /**
     * Hash password
     *
     * @param string $password
     * @return void
     * */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
