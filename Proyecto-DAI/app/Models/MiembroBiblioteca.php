<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiembroBiblioteca extends Model
{
    use HasFactory;
    protected $table = 'miembros_biblioteca';

    public function prestamos()
    {
        return $this->hasMany(Prestamo::class);
    }
}
