<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use  SoftDeletes;
    
    protected $guarded = [];
    public $timestamps = true;

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
