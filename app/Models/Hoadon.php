<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    use HasFactory;
    protected $table='hoadon';
    protected $colums_table=[
        'id',
        'madonhang',
        'product_id',
        'product_name',
        'price',
        'soluong',
        'tmp',
        'tongtien'
    ];
}
