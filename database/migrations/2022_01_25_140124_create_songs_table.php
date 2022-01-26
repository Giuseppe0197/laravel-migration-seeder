<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();

            $table -> string('title', 60);
            $table -> string('artist');
            $table -> date('date_of_release');
            $table -> string('genre', 60);
            $table -> integer('length') -> unsigned();
            $table -> string('album');
            $table -> integer('price') -> unsigned();
            $table -> text('text') -> nullable();
            $table -> tinyInteger('vote') -> unsigned() -> default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
