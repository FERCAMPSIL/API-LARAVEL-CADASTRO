<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $fillable = ['marca_id', 'nome', 'cor'];

    public function marcas()
    {
      return $this->belongsTo(Marca::class,'marca_id');
    }
}
