<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actualite extends Model
{
    //Name of table
    protected $name = 'actualites';
    //primary key 
    public $primaryKey = 'id';
    //Time
    public $timetamp = true;
}
