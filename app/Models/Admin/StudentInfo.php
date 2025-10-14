<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    public $timestamps = true;

    public function studentfiles()
    {
      return $this->hasMany(StudentFile::class, 'student_id');
    }
}
