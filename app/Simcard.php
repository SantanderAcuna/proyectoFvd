<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simcard extends Model
{
    protected $fillable = ['id', 'iccid', 'contenido', 'valor'];

}
