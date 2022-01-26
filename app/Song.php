<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    public $timestamps = false;

    protected $fillable = [

        'title',
        'artist',
        'date_of_release',
        'genre',
        'length',
        'album',
        'price',
        'text',
        'vote'

    ];
}
