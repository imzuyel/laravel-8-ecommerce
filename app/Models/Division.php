<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{

    use HasFactory;
    protected $guarded=['id'];
    public function zillas()
    {
        return $this->hasMany(Zilla::class)->select('name','id','division_id');
    }
}
