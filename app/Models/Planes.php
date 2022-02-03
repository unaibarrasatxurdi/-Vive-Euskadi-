<?php

namespace App\Models;

use Database\Factories\PlanesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Planes extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table = "planes";
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'DocumentName',
        'Provincia',
    ];
}
