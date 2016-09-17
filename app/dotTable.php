<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DotTable extends Model
{
    protected $table = 'DotTables';
    protected $fillable = ['pageNumber', 'ss', 'sl', 'si', 'dfl','hm', 'fb', 'sfh'];
}

     