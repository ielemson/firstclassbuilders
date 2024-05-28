<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectgallery extends Model
{
    use HasFactory;
    protected $fillable = ['name','project_id'];
    // protected $table = 'projectgalleries';

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }

}
