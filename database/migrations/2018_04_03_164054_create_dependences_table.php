<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependences', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->string('email');
            $table->string('acronym');
            $table->integer('nature_id')->unsigned()->index()->nullable();
            $table->foreign('nature_id')->references('id')->on('nature_dependences');
            $table->string('annex');
            $table->string('phone');
            $table->string('code_dependence');
            $table->string('dependence');
            $table->string('description');
            $table->integer('category_id')->unsigned()->index()->nullable();
            $table->foreign('category_id')->references('id')->on('category_dependences');
            $table->integer('level_id')->unsigned()->index()->nullable();
            $table->foreign('level_id')->references('id')->on('level_dependences');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependences');
    }
}
