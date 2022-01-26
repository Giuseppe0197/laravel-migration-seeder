<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public $timestamps = false;

    protected $fillable = [

        'name',
        'surname',
        'stagename',
        'country_birth',
        'total_albums',
        'genre',
        'description_artist'

    ];
}
