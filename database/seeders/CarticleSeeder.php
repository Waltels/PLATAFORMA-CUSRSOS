<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Carticle;

class CarticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carticle::create([
            'name' => 'Educación'
        ]);

        Carticle::create([
            'name' => 'Sindical'
        ]);

        Carticle::create([
            'name' => 'Opinión'
        ]);

        Carticle::create([
            'name' => 'Libre'
        ]);

    }
}
