<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDueniosTable extends Migration
{
    public function up()
    {
        Schema::create('duenios', function (Blueprint $table) {
            $table->id();
            $table->string('ci');
            $table->string('name');
            $table->string('lastname');
            $table->string('address');
            $table->integer('phone');
            $table->string('email')->unique();
            $table->string('genero');
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
        Schema::dropIfExists('duenios');
    }
}
