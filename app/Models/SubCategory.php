<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubSubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class,'subcategory_id','id');
    }
    public function subsubcategories()
    {
        return $this->hasMany(SubSubCategory::class,'subcategory_id','id');
    }
}
