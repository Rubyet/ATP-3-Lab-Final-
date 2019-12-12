<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    protected $table = "restaurant";
    
    protected $primaryKey = "id";
    public $timestamps = false;

	//const CREATED_AT = 'create_time';
	//const UPDATED_AT = 'update_time';
}
