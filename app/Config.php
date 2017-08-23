<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{

	protected $fillable = ['key_config', 'value'];
   	protected $table = 'config';
    //
}
