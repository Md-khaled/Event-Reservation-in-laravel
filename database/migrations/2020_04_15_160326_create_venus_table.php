<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',128)->unique();
            $table->string('image')->nullable();
            $table->string('mobile')->nullable();
            $table->integer('cost')->default(1);
            $table->integer('capacity')->nullable();
            $table->longText('address');
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
        Schema::dropIfExists('venus');
    }
}
