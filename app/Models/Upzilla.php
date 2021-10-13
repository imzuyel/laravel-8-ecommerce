<?php

namespace App\Models;

use App\Models\Zilla;
use App\Models\Division;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Upzilla extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function zilla()
    {
        return $this->belongsTo(Zilla::class);
    }
    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
