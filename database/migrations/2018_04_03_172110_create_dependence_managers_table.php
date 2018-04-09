<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependenceManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependence_managers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('dependence_id')->unsigned()->index();
            $table->foreign('dependence_id')->references('id')->on('dependences')->onDelete('cascade');
            $table->integer('manager_id')->unsigned()->index();
            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependence_managers');
    }
}
