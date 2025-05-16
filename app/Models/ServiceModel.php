<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'duration',
    ];

    // Relasi dengan contacts (reservasi)
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    // Relasi many-to-many dengan users (photographers)
    public function photographers()
    {
        return $this->belongsToMany(User::class, 'photographer_service');
    }
}