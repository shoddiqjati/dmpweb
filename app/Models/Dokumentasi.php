<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
  protected $table = 'dokumentasi';
  protected $primaryKey = 'id';

  protected $fillable = array('foto','captions');

public static $rules = array(
}
