<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'user_id',
    'ubicacion',
    'descripcion',
    'fecha_inicio',
    ];
    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
