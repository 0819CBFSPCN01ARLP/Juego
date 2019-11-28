<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class game extends Model
{
    public $table = "game";
    //public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];
}
