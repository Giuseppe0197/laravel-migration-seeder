<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    public $timestamps = false;


    protected $fillable = [

        'title_album',
        'date_release',
        'tracks',
        'artist',
        'genre',
        'producer',
        'description'

    ];
}
