<?php

namespace sisPersonal;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    //
    protected $table='pregunta';
    protected $primaryKey='idpregunta';
    //public $timestamps=false;

    protected $fillable=[
        'pr_pregunta',
        'cat_id'
    ];

    protected $guarded=[];
}
