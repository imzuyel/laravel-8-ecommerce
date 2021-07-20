<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductMultiImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    public function category(){
    	return $this->belongsTo(Category::class)->select('id','category_name_en','category_name_bn','category_slug_en','category_slug_bn','image');
    }


    public function brand(){
    	return $this->belongsTo(Brand::class)->select('id','brand_name_en','brand_name_bn','brand_slug_en','brand_slug_bn','image');
    }
    public function multi_images()
    {
        return $this->hasMany(ProductMultiImage::class);
    }
    public static function productFilter()
    {
        $productFilter['colors']=['red','black','white','blue','pink','navy','green','yellow'];
        $productFilter['sizes']=['s','m','l','ml','xl','xxl','xxxl'];
        return $productFilter;
    }
}
