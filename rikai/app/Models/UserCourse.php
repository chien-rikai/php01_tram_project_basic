<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    protected $table = 'user_subject';
    protected $primaryKey='id';
    protected $fillable = [
        'user_id',
        'course_id',
        'status'
    ];
    public function user()
    {
        return $this->belongsTo(Task::class,'user_id');
    }
    public function course()
    {
        return $this->belongsTo(User::class,'course_id');
    }
}
