<?php

use Illuminate\Database\Seeder;
use App\Models\student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

       for ($i = 0; $i < 100; $i++) {
            student::create([
                'userName' => $faker->name,
                'role_id' => '1',
            ]);
        }
    }
}
