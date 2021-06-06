<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{

  protected $fillable = [
      'comment',
      'user_id',
      'article_id',
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
