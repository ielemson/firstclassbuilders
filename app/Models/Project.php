<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','status','slug','cover_image'];

    public function newgallery()
    {
        return $this->hasMany(Projectgallery::class);
    }
}
