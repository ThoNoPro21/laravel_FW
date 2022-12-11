<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donhangchitiet extends Model
{
    use HasFactory;
    protected $table='donhangchitiet';
    protected $colums_table=[
        'id',
        'customer_id',
        'donhang_id',
        'madonhang',
    
    ];
}
