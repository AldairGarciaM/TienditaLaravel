<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $connection = 'mysql';
    protected $collection = 'productos';
    
    protected $fillable = [
        'Categoria', 'Nombre','Marca', 'Precio', 'Subcategoria', 'imagen'
    ];
}