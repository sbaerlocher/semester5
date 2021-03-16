<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100);
            $table->date('start_date');
            $table->date('end_date');
            $table->date('effective_start_date');
            $table->date('effective_end_date');
            $table->integer('progress');
            $table->string('documentation_link', 200);

            $table->unsignedBigInteger('ressource_id');
            $table->unsignedBigInteger('phase_id');
            $table->unsignedBigInteger('external_cost_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('ressource_id')->references('id')->on('ressources');
            $table->foreign('phase_id')->references('id')->on('phases');
            $table->foreign('external_cost_id')->references('id')->on('external_costs');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
