<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harios', function (Blueprint $table) {
            $table->id();
          /*  $table->unsignedBigInteger('flight_id');
            $table->foreign('flight_id')->references('id')->on('fligths');*/
            $table->foreignId('flight_id')->constrained('flights');
            $table->time('hora');
            $table->string('no_puerta');

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
        Schema::dropIfExists('harios');
    }
}
