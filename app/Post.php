<?php

namespace App;
use Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table="posts";
    protected $fillable=['title','content','slug','created_by'];

    public function retrievePost($num){
      $this->where("created_at",'>',Carbon::now());
    }
}
