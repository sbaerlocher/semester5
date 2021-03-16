<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('external_costs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('budgeted_cost');
            $table->integer('effective_cost');
            $table->unsignedBigInteger('cost_type_id');
            $table->string('explanation');
            $table->foreign('cost_type_id')->references('id')->on('cost_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('external_costs');
    }
}
