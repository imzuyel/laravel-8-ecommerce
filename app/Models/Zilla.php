<?php

namespace App\Models;

use App\Models\Upzilla;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zilla extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function division()
    {
        return $this->belongsTo(Division::class)->select('name','id');
    }
    public function upzillas()
    {
        return $this->HasMany(Upzilla::class);
    }

}
