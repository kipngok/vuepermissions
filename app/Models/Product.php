<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
      protected $fillable = ['name','discription','price','category_id'];
      public function category(){
        return $this->hasOne('App\Models\Category', 'id', 'category_id')->withDefault(['name'=>'Deleted']);
       }

}
