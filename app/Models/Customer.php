<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function feeds(): HasMany
    {
        return $this->hasMany(Feed::class);

    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);

    }
}
