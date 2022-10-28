<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['user_id', 'total', 'status','direccion', 'telefono',
    'tipo_envio','metodo_pago', 'monto','ref','fecha_pago', 'transporte',
    'direccion_transporte', 'oc_image'];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
