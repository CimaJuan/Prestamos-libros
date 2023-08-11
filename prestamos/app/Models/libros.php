<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    use HasFactory;


    public function editorial(){
        return $this->belongsTo(editorial::class, 'editorial_id', 'id');
    }

    public function categoria(){
        return $this->belongsTo(categoria::class, 'categoria_id', 'id');
    }

    public function estado(){
        return $this->belongsTo(estado::class, 'estado_id', 'id');
    }
}
