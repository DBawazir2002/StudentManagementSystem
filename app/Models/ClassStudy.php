<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassStudy extends Model
{
    use HasFactory;

    protected $fillable = ['className', 'section', 'created_at', 'updated_at'];

    public function students() {
        return $this->hasMany(Student::class);
    }

    public function notices() {
        return $this->hasMany(Notice::class);
    }
}
