<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OneWord extends Model
{
    use HasFactory;
    use SoftDeletes;


    public function getConvertedCreatedAtAttribute()
  {
      return $this->created_at->format('Y年m月d日 G時i分s秒');
  }
}
