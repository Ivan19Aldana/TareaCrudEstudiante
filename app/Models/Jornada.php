<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    //use HasFactory;
    protected $table='jornada';
    public $timestamps=false;
    protected $fillable=[
        'idjornada', 'descripcion'
    ];

    protected $primaryKey='idjornada';
}
