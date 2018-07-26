<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarCamposUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('usuarios', function (Blueprint $table) {
          $table->increments('id');
          $table->text('name',100);
          $table->string('email',191);
          $table->string('telphone', 12);
          $table->string('password');
          $table->integer('profesion_id');
          $table->integer('company_id');
          $table->rememberToken();
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
        
    }
}
