<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos';

    protected $primaryKey = 'ID_Evento'; 
    
    protected $fillable = [
        'ID_Estado',
        'ID_Usuario',
        'Franja_horaria',
        'Fecha',
        'ID_Actividad'
    ];

    // Relaciones
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'ID_Estado', 'id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'ID_Usuario', 'id');
    }

    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'ID_Actividad', 'id');
    }
}