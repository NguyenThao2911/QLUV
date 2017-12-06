<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_language', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_candidate');
            $table->unsignedInteger('id_language');
            $table->foreign('id_candidate')->references('id')->on('candidates');
            $table->foreign('id_language')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_language');
    }
}
