<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    public function folders()
    {
        return $this->hasMany(Folder::class);
    }

    public function getByCategory(int $limit_count = 5)
    {
        return $this->folders()->with('school')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}