<?php

namespace Sawirricardo\Rajaongkir\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Sawirricardo\Rajaongkir\Laravel\Models\RajaongkirRegion;

class RajaongkirRegionSeeder extends Seeder
{
    public function run()
    {
        Http::withHeaders([
            'key' => config('rajaongkir.api_key'),
        ])->get('https://api.rajaongkir.com/starter/province')
            ->collect('rajaongkir.results')
            ->each(function ($province) {
                RajaongkirRegion::create([
                    'name' => $province['province'],
                    'rajaongkir_id' => $province['province_id'],
                    'type' => 1,
                ]);
            });

        Http::withHeaders([
            'key' => config('rajaongkir.api_key'),
        ])->get('https://api.rajaongkir.com/starter/city')
            ->collect('rajaongkir.results')
            ->each(function ($city) {
                RajaongkirRegion::create([
                    'name' => $city['city_name'],
                    'rajaongkir_id' => $city['city_id'],
                    'type' => $city['type'] == 'Kabupaten' ? 2 : 1,
                    'meta' => ['postal_code' => $city['postal_code']],
                ], RajaongkirRegion::query()
                    ->where('type', 1)
                    ->where('rajaongkir_id', $city['province_id'])
                    ->first());
            });
    }
}
