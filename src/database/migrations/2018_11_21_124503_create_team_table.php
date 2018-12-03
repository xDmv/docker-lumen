<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lang');
            $table->string('name');
            $table->string('name_md5');
            $table->string('prof')->nullable();
            $table->text('text_html')->nullable();
            $table->string('img_slider')->nullable();
            $table->string('img_menu')->nullable();
            $table->string('img_window')->nullable();
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
        Schema::dropIfExists('team');
    }
}
//php artisan make:migration create_user_table --create=user