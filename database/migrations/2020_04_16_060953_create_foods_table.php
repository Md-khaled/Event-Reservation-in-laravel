<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('venu_id')->unique()->nullable();
            $table->foreign('venu_id') ->references('id')->on('venus') ->onDelete('cascade');
            $table->string('breakfast')->nullable();
            $table->string('lunch_normal')->nullable();
            $table->string('lunch_deluxe')->nullable();
            $table->string('lunch_royal')->nullable();
             $table->string('dinner_normal')->nullable();
            $table->string('dinner_deluxe')->nullable();
            $table->string('dinner_royal')->nullable();
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
        Schema::dropIfExists('foods');
    }
}
