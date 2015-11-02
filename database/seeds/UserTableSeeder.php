<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create();
        factory(App\User::class)->create([
            'firstname' => 'Patrick',
            'lastname'  => 'Kernke',
            'email'     => 'pk@sicna.de',
            'password'  => bcrypt('SICNA')
        ]);
    }
}
