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
            $table->string('email')->nullable();
            $table->string('acronym')->unique()->nullable();
            $table->string('name')->unique();
            $table->integer('nature_id')->unsigned()->index()->nullable();
            $table->foreign('nature_id')->references('id')->on('nature_dependences');
            $table->string('annex')->nullable();
            $table->string('phone')->nullable();
            $table->string('code_dependence')->nullable();
            $table->string('dependence')->nullable();
            $table->string('description')->nullable();
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
