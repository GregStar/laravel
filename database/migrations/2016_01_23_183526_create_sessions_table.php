<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->rememberToken('');
            $table->string('date');
            $table->string('time');
            $table->integer('pax');
            $table->string('name');
            $table->string('email');
            $table->string('freetable');
            $table->string('table');
            $table->string('message', 60);
            $table->integer('newsletter');
            $table->integer('agb');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sessions');
    }
}
