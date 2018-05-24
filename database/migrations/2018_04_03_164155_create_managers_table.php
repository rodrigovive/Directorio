<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->string('dni')->unique()->nullable();
            $table->string('name');
            $table->string('lastname');
            $table->string('phone')->nullable();
            $table->string('cellphone')->nullable();
            $table->integer('occupation_id')->unsigned()->index()->nullable();
            $table->foreign('occupation_id')->references('id')->on('occupation_managers');
            $table->string('email')->unique()->nullable();
            $table->integer('dependence_id')->unsigned()->index()->nullable();
            $table->foreign('dependence_id')->references('id')->on('dependences');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('managers');
    }
}
