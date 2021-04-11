<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galerie extends Model
{
    //Name of table
    protected $name = 'galeries';
    //primary key 
    public $primaryKey = 'id';
    //Time
    public $timetamp = true;
}
