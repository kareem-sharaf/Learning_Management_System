<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'video', 'subject_id', 'unit_id', 'lesson_id'];

public function subject()
{
    return $this->belongsTo(Subject::class);
}

public function unit()
{
    return $this->belongsTo(Unit::class);
}

public function lesson()
{
    return $this->belongsTo(Lesson::class);
}
public function comments()
{
    return $this->hasMany(Comment::class);
}

}