<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'user_group';
    protected $fillable=['group_name'];
    protected $primaryKey='id';
    public $timestamps=false;

    public function users()
    {
    	return $this->hasOne('App\User','user_group','group_id');
    }
}
