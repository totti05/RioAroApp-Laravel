<?php

use Illuminate\Database\Seeder;
use App\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('People')->insert([
            'id' => '1',
            'dni' => 'V22820863',
            'name' => 'Raul',
            'lastname' => 'Leandro',
            'urbanization' => 'Rio Aro',
            'street' => '16',
            'house_number' => '24',
            'birthdate' => '1994-04-05',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        factory(Person::class,10)->create();
    }
}
