<?php

namespace sisPersonal;

use Illuminate\Database\Eloquent\Model;

class AreaCargo extends Model
{
    protected $table='area_cargo';
    protected $primarykey='idareacargo';
    public $timestamps=false;

    protected $fillable=[
        'idarea',
        'idcargo'
    ];

    protected $guarded=[];
}

