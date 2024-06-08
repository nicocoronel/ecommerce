<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $fillable = [
        'user_id', 'producto_id', 'cantidad',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'user_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
