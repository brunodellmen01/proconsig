<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('adresses');
        Schema::create('adresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('uuid');
            $table->string('name')->nullable();
            $table->string('number')->nullable();
            $table->string('district')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('complement')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
