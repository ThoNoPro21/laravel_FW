<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donhang extends Model
{
    use HasFactory;
    protected $table='donhang';
    protected $colums_table=[
        'id',
        'tenkhachhang',
        'diachi',
        'SDT',
        'ghichu',
        'kieuthanhtoan'
    ];
        
}
