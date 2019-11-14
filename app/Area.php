<?php

namespace sisPersonal;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $table='area';
    protected $primarykey='idarea';
    public $timestamps=false;

    protected $fillable=[
        'nombre_area',
    ];

    protected $guarded=[];
}
