<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreaterealStatesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city');
            $table->string('group');
            $table->string('building');
            $table->string('flat');
            $table->string('type');
            $table->string('view');
            $table->string('purpose');
            $table->string('name');
            $table->string('mobile');
            $table->string('price');
            $table->string('state');
            $table->date('date');
            $table->string('note');
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
        Schema::drop('real_states');
    }
}
