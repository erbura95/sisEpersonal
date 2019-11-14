<?php

namespace sisPersonal;

use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    //
    protected $table='cuestionario';
    protected $primaryKey='idcuestionario';
    //public $timestamps=false;

    protected $fillable=[
        'cu_nombre',
        'cu_inicio',
        'cu_final',
        'cu_tipo',
    ];

    protected $guarded=[];
}
