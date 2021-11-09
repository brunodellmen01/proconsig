<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations
     * 'uuid',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        'license_end',
        'coefficient_id',
        'date_cancell'.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('uuid');
            $table->string('code', 8);
            $table->string('fantasy_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('document')->nullable();
            $table->string('responsible_name')->comment('código postal/cep')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->string('phone')->nullable();
            $table->unsignedBigInteger('address_id')->nullable();
            $table->string('total_users',30)->nullable();
            $table->string('total_users_fgts')->comment('Cidade')->nullable();
            $table->string('total_users_siap',150)->nullable();
            $table->string('total_users_military',150)->nullable();
            $table->date('license_end')->nullable();
            $table->unsignedBigInteger('coefficient_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('status_id')->references('id')->on('status')->onDelete('CASCADE');
            $table->foreign('address_id')->references('id')->on('adresses')->onDelete('CASCADE');
            $table->foreign('coefficient_id')->references('id')->on('coefficients')->onDelete('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
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
        Schema::dropIfExists('companies');
    }
}
