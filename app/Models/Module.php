<?php

namespace App\Models;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}
