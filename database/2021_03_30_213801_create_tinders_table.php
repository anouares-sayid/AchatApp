<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buyer_id');
            //modedepassation
            $table->foreign('buyer_id')->references('id')->on('companies');
            $table->string('procurementMethod');
            $table->string('marketType');
            $table->string('estimatedCost');
            $table->string('activityField');
            $table->string('category');
            $table->mediumText('agreement');
            $table->date('Date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tinders');
    }
}
