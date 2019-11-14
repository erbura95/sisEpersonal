<?php

namespace sisPersonal;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table='categoria';
    protected $primaryKey='idcategoria';
    //public $timestamps=false;

    protected $fillable=[
        'cat_nombre',
        'cat_tipo'
    ];

    protected $guarded=[];
}
