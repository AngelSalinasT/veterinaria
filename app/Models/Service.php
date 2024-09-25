<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }

    public function reservations()
    {
        return $this->belongsToMany(Reservation::class, 'services_reservations');
    }
}
