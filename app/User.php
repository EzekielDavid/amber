<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lname', 'fname','mname','branch', 'email_address','uname','user_group', 'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pword'
    ];
    public function role()
    {
        return $this->hasOne('App\Role','group_id','user_group');

    }

     public function setAttribute($key, $value)
      {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
          parent::setAttribute($key, $value);
        }
      }

    private function checkIfUserHasRole($need_role){
        return (strtolower($need_role)==strtolower($this->role->group_name)) ? true : null;
    }
     public function username()
    {
        return 'uname';
    }

    public function getAuthPassword()
    {
        return $this->pword;
    }
    public function hasRole($roles)
    {
        if(is_array($roles))
        {
            foreach ($roles as $need_role) {
                if($this->checkIfUserHasRole($need_role))
                {
                    return true;
                }
            }
        }else{
            return $this->checkIfUserHasRole($roles);
        }
         return false;
    }
}
