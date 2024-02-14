<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = ['noticeTitle', 'noticeMessage', 'classStudy_id', 'created_at', 'updated_at'];

    public function classStudy() {
        return $this->belongsTo(ClassStudy::class, 'classStudy_id');
    }
}
