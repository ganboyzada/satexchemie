<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function photos(){
        return $this->hasMany(ProjectPhoto::class, 'project_id');
    }

    public function category(){
        return $this->belongsTo(Navigation::class, 'categ_id');
    }
}
