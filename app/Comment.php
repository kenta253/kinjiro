<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{

  protected $fillable = [
      'comment'
   ];

   public function user(): BelongsTo
   {
       return $this->belongsTo('App\User');
   }

   public function articles(): BelongsTo
   {
       return $this->belongsTo('App\Article');
   }

}
