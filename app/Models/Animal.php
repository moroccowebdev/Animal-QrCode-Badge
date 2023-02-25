<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'qr_id',
        'password',
        'profile',
        'email',
        'phone',
        'adress',
        'animal'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
