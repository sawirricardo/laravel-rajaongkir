<?php

namespace Sawirricardo\Rajaongkir\Laravel\Commands;

use Illuminate\Console\Command;

class RajaongkirCommand extends Command
{
    public $signature = 'rajaongkir:seed-regions';

    public $description = 'Cache data from RajaOngkir';

    public function handle(): int
    {
        $this->call('db:seed RajaongkirRegionSeeder');
        $this->comment('All done');

        return self::SUCCESS;
    }
}
