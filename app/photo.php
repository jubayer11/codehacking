<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    //
    /*
    protected $uploads = "{{ URL::to('/images/') }}";
    public function getFileAttribute($photo){
        return $this->uploads . $photo;

         }
         */
    protected $fillable = ['file'];


}
