<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsDocumentToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('document')->nullable()->after('role_id');
            $table->string('gender')->nullable()->after('document');
            $table->date('birthday')->nullable()->after('gender');
            $table->string('phone')->nullable()->after('birthday');
            $table->unsignedBigInteger('status_id')->nullable()->after('phone');

            $table->foreign('status_id')->references('id')->on('status')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
