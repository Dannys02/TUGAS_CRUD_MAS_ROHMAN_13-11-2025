<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class penggunaModel extends Model
{
  protected $table = "pengguna";
  protected $fillable = ["name", "email", "password"];
}
