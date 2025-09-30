<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use  SoftDeletes;
    protected $guarded = [];
    public $timestamps = true;

    public function countryContinent()
    {
        return $this->belongsTo(CountryContinent::class, 'continent_id');
    }
}
