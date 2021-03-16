<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100);
            $table->date('start_date');
            $table->date('end_date');
            $table->date('effective_start_date');
            $table->date('effective_end_date');
            $table->date('release_date');
            $table->integer('progress');

            $table->unsignedBigInteger('visum_id');
            $table->unsignedBigInteger('project_id');
            $table->string('documentation_link', 200);


            $table->foreign('visum_id')->references('id')->on('users');




            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phases');
    }
}
