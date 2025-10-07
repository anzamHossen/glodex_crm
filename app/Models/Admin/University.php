<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class University extends Model
{
    use  SoftDeletes;
    protected $guarded = [];
    public $timestamps = true;
}
