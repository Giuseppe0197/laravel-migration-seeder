<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table -> string('title_album');
            $table -> date('date_release');
            $table -> tinyInteger('tracks');
            $table -> string('artist');
            $table -> string('genre');
            $table -> string('type', 40);
            $table -> tinyInteger('number_of_discs');
            $table -> string('producer');
            $table -> text('description') -> nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
