<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentModal extends Model
{
    protected $table = 'student';

    protected $fillable = ['name', 'class', 'phone', 'email', 'gender', 'nisn'];
}
