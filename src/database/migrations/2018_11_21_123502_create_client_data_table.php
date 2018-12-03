<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lang_interface');
            $table->string('name_user');
            $table->string('name_md5');
            $table->string('email_user');
            $table->string('name_baby');
            $table->string('gender');
            $table->date('data_z');
            $table->date('data_red');
            $table->datetime('data_install');
            $table->string('key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_data');
    }
}
