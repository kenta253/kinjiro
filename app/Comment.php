<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Comment extends Model
{

  protected $fillable = [
   'comment',
   ];

   public function user(): BelongsToMany
 {
     return $this->belongsToMany('App\User')->withTimestamps();
 }

 public function articles(): BelongsToMany
{
   return $this->belongsToMany('App\Article')->withTimestamps();
}

}
