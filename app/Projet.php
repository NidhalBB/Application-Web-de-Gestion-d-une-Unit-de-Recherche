<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
   //Name of table
   protected $name = 'projets';
   //primary key 
   public $primaryKey = 'id';
   //Time
   public $timetamp = true;
}
