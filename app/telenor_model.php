<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telenor_model extends Model
{
    protected $table = 'telenor_models';
    protected $fill = ['id','ssn','name'] ;
}
