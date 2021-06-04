<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Folder extends Model
{

  public function tasks()
{
  return $this->hasMany('App\Task');
}

}
