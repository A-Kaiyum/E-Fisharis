<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   protected $fillable = [
       'name',
       'totalLand',
       'totalPamp',
       'fishCategories',
       'totalFish',
   ];
}
