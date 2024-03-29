<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table -> string('name', 60);

            $table -> string('surname', 60);
            $table -> string('stagename');
            $table -> string('country_birth', 150) -> nullable();
            $table -> integer('total_albums') -> nullable();
            $table -> string('genre', 70);
            $table -> text('description_artist') -> nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists');
    }
}
