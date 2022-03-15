<?php

namespace Sawirricardo\Rajaongkir\Laravel\Models;

use Illuminate\Database\Eloquent\Model;

class RajaongkirRegion extends Model
{
    public $timestamps = false;

    protected $casts = [
        'meta' => 'array',
    ];
}
