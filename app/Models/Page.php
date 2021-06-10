<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function findPage($slug)
    {
        return self::where(['slug' => $slug, 'status' => true])->firstOrFail();
    }
}
