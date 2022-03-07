<?php

namespace Sawirricardo\Rajaongkir\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sawirricardo\Rajaongkir\Rajaongkir
 */
class Rajaongkir extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-rajaongkir';
    }
}
