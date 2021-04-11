<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    //Name of table
    protected $name = 'publications';
    //primary key 
    public $primaryKey = 'id';
    //Time
    public $timetamp = true;
}
