<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   protected $fillable=['name','description','file','amount'];

   public function user(){

   		return $this->belongsTo('App\user');
   }

   public function photo(){

   		return $this->belongsTo('App\photo');
   }
}
