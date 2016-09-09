<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBreadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('breads', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date')->unique();
            $table->string('title');
            $table->string('read');
            $table->string('verse');
            $table->string('bibleinayear');
            $table->text('text');
            $table->string('aphorism');
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
        //
        Schema::drop('breads');
    }
}
