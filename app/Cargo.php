<?php

namespace sisPersonal;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table='cargo';
    protected $primaryKey='idcargo';
    public $timestamps=false;
    
    protected $fillable=[
        'nombre_puesto',
        'sueldo'
    ];
    
    protected $guarded=[];
}
