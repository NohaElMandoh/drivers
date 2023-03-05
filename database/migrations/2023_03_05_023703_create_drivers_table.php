<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();

            $table->string('f_name');
            $table->string('l_name');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->string('picture')->nullable();
            $table->double('lat')->nullable();
            $table->double('lang')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('vehicle_type')->nullable();//car bus
            $table->string('chat_ref_id')->nullable();
            $table->double('price')->nullable();
            $table->string('eta')->nullable();
            $table->string('distance')->nullable();
            $table->string('payment')->nullable();

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
        Schema::dropIfExists('drivers');
    }
};
