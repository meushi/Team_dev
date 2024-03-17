<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'school_id',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function getByCategory(int $limit_count = 5)
    {
        return $this->posts()->with('folder')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}