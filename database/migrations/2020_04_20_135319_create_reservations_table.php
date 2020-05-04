<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id') ->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('event_type_id')->nullable();
            $table->foreign('event_type_id') ->references('id')->on('event_types')->onDelete('cascade');
            $table->unsignedBigInteger('food_id')->nullable();
            $table->foreign('food_id') ->references('id')->on('foods')->onDelete('cascade');
            $table->string('foodtype')->nullable();
            $table->string('equipmenttype')->nullable();
            $table->string('decorationtype')->nullable();
            $table->unsignedBigInteger('drink_id')->nullable();
            $table->foreign('drink_id') ->references('id')->on('drinks') ->onDelete('cascade');
            $table->string('guest');
            $table->string('total');
            $table->string('payment')->nullable();
            $table->string('transaction_id')->nullable();
             $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->string('process')->default('pending');
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
        Schema::dropIfExists('reservations');
    }
}
