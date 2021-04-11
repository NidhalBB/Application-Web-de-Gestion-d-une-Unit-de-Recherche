<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
   //Name of table
   protected $name = 'membres';
   //primary key 
   public $primaryKey = 'id';
   //Time
   public $timetamp = true;

   public function projet(){
      return $this->belongsTo(Projet::class);
   }
}
