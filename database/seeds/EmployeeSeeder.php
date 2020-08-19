<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = Array(0 => "M", 1 => "F");

        for ($i=22; $i < 42 ; $i++) { 
            $faker = Faker\Factory::create();
            $name =  $faker->name;
            $arrName = explode(' ', $name);

            $randIndex = array_rand($genders);

            Employee::create([
                'emp_no' => $i,
                'birth_date' => $faker->date($format = 'Y-m-d', $max = '2000-01-01').chr(10),
                'first_name' => $arrName[0],
                'last_name' => $arrName[1],
                'gender' => 'M',
                'hire_date' =>$faker->date($format = 'Y-m-d', $max = 'now').chr(10),
              ]);
         
        }


    }
}