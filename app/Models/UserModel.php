<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\UserModel as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserModel extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relasi dengan galleries
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    // Relasi dengan photos
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    // Relasi dengan contacts (reservasi)
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    // Relasi many-to-many dengan services (jika menggunakan fitur spesialisasi photographer)
    public function services()
    {
        return $this->belongsToMany(Service::class, 'photographer_service');
    }
}