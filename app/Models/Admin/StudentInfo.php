<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    public $timestamps = true;
}
