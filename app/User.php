<?php

namespace App;
use App\Role;
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
    protected $fillable = ['name', 'email', 'password','role_id','photo_id','is_active',];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token',];

    
    
    public function role(){
        
        return $this->belongsTo(Role::class);
    
    }

    public function photo(){
        return $this->belongsTo(Photo::class);
    }





}
