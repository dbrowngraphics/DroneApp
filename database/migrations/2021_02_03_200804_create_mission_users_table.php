<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mission_users', function (Blueprint $table) {
            $table->id();
            $table->integer('mission_id');
            $table->foreign('mission_id')->references('id')->on('missions');
            $table->integer('pilot_id');
            $table->foreign('pilot_id')->references('id')->on('pilots');
            $table->integer('drone_id');
            $table->foreign('drone_id')->references('id')->on('drones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mission_users');
    }
}
