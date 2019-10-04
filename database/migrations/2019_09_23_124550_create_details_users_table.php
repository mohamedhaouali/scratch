<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_users');
            $table->string('photo_profil')->nullable();
            $table->string('tel1')->nullable();
            $table->string('tel2')->nullable();
            $table->string('fax')->nullable();
            $table->string('ville')->nullable();
            $table->string('adress')->nullable();
            $table->integer('cp')->nullable();
            $table->string('presentation')->nullable();
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
        Schema::dropIfExists('details_users');
    }
}
