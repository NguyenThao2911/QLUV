<?php

use Illuminate\Database\Seeder;

class CandidateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 DB::table('candidates')->insert([
        		'fullname'=>'Nguyen Thi Thao',
        		'email'=>'ngthao291195@gmail.com',
        		'phone'=>'01685149806',
        		'sex'=>'1',
        		'birthday'=>'1995-11-29',
        		'experience'=>'English',
        		'school'=>'HUMG',
        		'certificate'=>'3',
        		'type_work'=>'0',
                'user_create'=>'thao',
                'language'=>'English'
        	]);
    }
}
