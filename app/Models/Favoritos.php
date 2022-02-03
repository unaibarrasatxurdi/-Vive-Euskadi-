<?php

namespace App\Models;

use Database\Factories\FavoritosFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Favoritos extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'favoritos';
    
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'DocumentName',
    ];
}
