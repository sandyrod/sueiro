<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['user_id', 'total', 'status','direccion', 'telefono', 'retiro_sucursal', 'envio_domicilio','contado','monto','transferencia_bnc','ref','fecha'];
    use HasFactory;

}
