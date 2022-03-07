<?php

namespace Sawirricardo\Rajaongkir\Laravel\Commands;

use Illuminate\Console\Command;

class RajaongkirCommand extends Command
{
    public $signature = 'laravel-rajaongkir';

    public $description = 'Cache data from RajaOngkir';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
