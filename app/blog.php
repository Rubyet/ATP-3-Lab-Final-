<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = "blog";
    
    protected $primaryKey = "id";
    public $timestamps = false;

	//const CREATED_AT = 'create_time';
	//const UPDATED_AT = 'update_time';
}
