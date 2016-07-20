<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        DB::table('admins')->insert([

          'adminName'=>'Miti',
          'email'=>'miti@box.az',
          'password'=>Hash::make('123456'),

          ]);

            DB::table('companies')->insert([

                'founderName'=>'sdasd',
                'email'=>'kia@box.az',
                'password'=>Hash::make('123456'),
            ]);

    }
}
