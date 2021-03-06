<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(EstadoSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(EstadoCivilSeeder::class);
        $this->call(FuncionarioSeeder::class);
        $this->call(UsuarioSeeder::class);
    }
}
