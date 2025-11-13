<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MajorsModel extends Model
{
    protected $table = 'majors';

    protected $fillable = ["majors_name"];
}
