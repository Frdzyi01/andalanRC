<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'name',
        'client',
        'date',
        'category',
        'link',
        'description',
    ];

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
