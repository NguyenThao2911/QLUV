<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'fullname'=>'Nguyen Thi Thao',
        		'username'=>'thao',
        		'email'=>'ngthao2911@gmail.com',
        		'password'=>bcrypt('thaothao'),
        		'phone'=>'01685149806',
        		'sex'=>'1',
        		'is_admin'=> '0'
        	]);
    }
}
