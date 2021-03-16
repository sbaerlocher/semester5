<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 50);
            $table->string('description', 200);
            $table->dateTimeTz('approval_date');
            $table->string('pritority', 200);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('documentation_link', 200);
            $table->integer('progress');

            $table->unsignedBigInteger('process_model_id');
            $table->unsignedBigInteger('leader_id');

            $table->foreign('leader_id')->references('id')->on('users');
            $table->foreign('process_model_id')->references('id')->on('process_models');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
