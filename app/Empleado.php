<?php

namespace sisPersonal;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $table='empleado';
    protected $primaryKey='idempleado';
    //public $timestamps=false;
    
    protected $fillable=[
        'emp_appaterno',
        'emp_apmaterno',
        'emp_nombre',
        'emp_sexo',
        'emp_telefono',
        'emp_direccion',
        'emp_civil',
        'emp_nacimiento',
        'emp_foto',
        'emp_estado'
        /*
        'dni',
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'estado_civil',
        'telefono',
        'nacimiento',
        'genero',
        'direccion',
        'foto',
        'estado'*/
    ];
    
    protected $guarded=[];
}
