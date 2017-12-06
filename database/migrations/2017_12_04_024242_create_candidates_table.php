<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates',function(Blueprint $table){
            $table->increments('id');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->enum('sex',['0','1']);
            $table->datetime('birthday');
            $table->string('experience');
            $table->string('school');
            $table->string('certificate');
            $table->enum('type_work',['0','1','2']);
            $table->string('user_create');
            $table->string('language');
            $table->softDeletes();
            $table->unique(['email', 'deleted_at']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
