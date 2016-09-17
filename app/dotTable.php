<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DotTable extends Model
{
    protected $table = 'DotTables';
    protected $fillable = ['user_id','pageNumber', 'counts', 'ss', 'sl', 'si', 'dfl','hm', 'fb', 'sfh'];
}

     