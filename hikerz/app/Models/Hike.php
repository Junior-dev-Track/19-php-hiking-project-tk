<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hike extends Model
{
    protected $fillable = ['name', 'distance', 'duration', 'elevation_gain',  'description'];

}
