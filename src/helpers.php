<?php

use Sawirricardo\Rajaongkir\Laravel\Rajaongkir;

if (!function_exists('rajaongkir')) {
    function rajaongkir(): \Sawirricardo\Rajaongkir\Laravel\Rajaongkir
    {
        return app(Rajaongkir::class);
    }
}
