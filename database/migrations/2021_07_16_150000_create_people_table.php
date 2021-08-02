<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('landline');
            $table->string('email');
            $table->foreignId('id_country')->references('id')->on('countries');
            $table->foreignId('id_departament')->references('id')->on('departaments');
            $table->foreignId('id_municipality')->references('id')->on('municipalities');
            $table->foreignId('id_locality')->references('id')->on('localities');
            $table->string('address');
            $table->date('birthdate');
            $table->boolean('isActive')->index()->default(false);
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
        Schema::dropIfExists('people');
    }
}
