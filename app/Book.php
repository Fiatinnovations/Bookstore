<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   protected $fillable=['title','description','photo_id','amount'];

   public function user(){

   		return $this->belongsTo('App\User');
   }

   public function photo(){

   		return $this->belongsTo('App\Photo');
   }
}
