<?php

use Illuminate\Database\Seeder;
use App\Language;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
        		'name'=>'Vietnamese'
        	]);
        DB::table('languages')->insert([
        		'name'=>'English'
        	]);
        DB::table('languages')->insert([
        		'name'=>'China'
        	]);
        DB::table('languages')->insert([
        		'name'=>'Japanese'
        	]);
    }
}
