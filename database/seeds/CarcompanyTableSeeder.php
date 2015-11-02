<?php

use Illuminate\Database\Seeder;

class CarcompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Carcompany::class)->create(['name'=>'Audi']);
        factory(App\Carcompany::class)->create(['name'=>'Aston Martin']);
        factory(App\Carcompany::class)->create(['name'=>'BMW']);
        factory(App\Carcompany::class)->create(['name'=>'Bentley']);
        factory(App\Carcompany::class)->create(['name'=>'Volkswagen']);
        factory(App\Carcompany::class)->create(['name'=>'Fiat']);
        factory(App\Carcompany::class)->create(['name'=>'Ford']);
        factory(App\Carcompany::class)->create(['name'=>'Opel']);
        factory(App\Carcompany::class)->create(['name'=>'Ferrari']);
        factory(App\Carcompany::class)->create(['name'=>'Mercedes']);
        factory(App\Carcompany::class)->create(['name'=>'Hyundai']);
        factory(App\Carcompany::class)->create(['name'=>'Daihatsu']);
        factory(App\Carcompany::class)->create(['name'=>'Toyota']);
        factory(App\Carcompany::class)->create(['name'=>'Porsche']);
    }
}
