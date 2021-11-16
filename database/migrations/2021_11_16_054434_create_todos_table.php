<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            // table id, user_id, todo, label, done
            $table->id();
            $table->unsignedBigInteger('user_id');
            // create foreign_key_constraints reference id on users table
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('todo');
            $table->string('label');
            $table->boolean('done');
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
        // create schema to delete table
        Schema::dropIfExists('todos');
    }
}
