<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Casts of the model dates
    protected $casts = [
        'publish_date' => 'date'
    ];
}
