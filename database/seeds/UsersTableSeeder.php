<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //clear users table
        User::truncate();
        $faker = \Faker\Factory::create();

        //make sure everyone has same password and hash it before loop
        //else our seeder will be too slow
        $password = Hash::make('ankush');

        User::create([
            'name' => 'ankush',
            'email'=> 'pertaubcaspeo9@gmail.com',
            'password'=> $password,
        ]);

        //generate users for app
        for ($i=0;$i<10;$i++){
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>$faker->password,
            ]);
        }

    }
}
