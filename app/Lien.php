<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lien extends Model
{
    //Name of table
   protected $name = 'Liens';
   //primary key 
   public $primaryKey = 'id';
   //Time
   public $timetamp = true;
}
