<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poin extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'id_user',
        'username_user',
        'poin_user'
    ];

    protected $table = 'poins';
}
