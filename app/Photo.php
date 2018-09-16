<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable =['file'];


    public function getClientOriginalName(){
    	return $this->upload.$photo;
    }
}
