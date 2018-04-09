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
            $table->string('dni');
            $table->string('name');
            $table->string('lastname');
            $table->string('phone');
            $table->string('cellphone');
            $table->string('title_job');
            $table->string('description_job');
            $table->string('email');
            $table->string('image');
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
