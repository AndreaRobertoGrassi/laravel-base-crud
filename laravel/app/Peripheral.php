<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peripheral extends Model
{
  protected $fillable = [     //campi che vado a chiedere nel form
    'name',
    'model',
    'price',
    'consumption'
  ];
}
