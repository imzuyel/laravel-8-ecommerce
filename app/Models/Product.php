<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    public function category(){
    	return $this->belongsTo(Category::class);
    }


    public function brand(){
    	return $this->belongsTo(Brand::class);
    }
}
