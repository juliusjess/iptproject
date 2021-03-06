<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['make', 'model', 'year', 'plate_no'];

    protected $table = 'cars';
}
