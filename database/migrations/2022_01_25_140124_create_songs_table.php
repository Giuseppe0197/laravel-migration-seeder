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

            $table -> string('title');
            $table -> string('artist');
            $table -> date('date_of_release');
            $table -> string('genre');
            $table -> string('length', 30);
            $table -> string('album');
            $table -> text('text') -> nullable();
            $table -> tinyInteger('vote');
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
