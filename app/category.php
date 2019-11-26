<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class category extends Model
{
    public $table = "category";
    //public $primaryKey = "id";
    public $timestamps = false;
    public $guarded = [];
}
