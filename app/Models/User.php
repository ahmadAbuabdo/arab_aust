<?php

namespace Admailer\Models;

use Auth;
use Route;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Admailer\Models\User\Traits\UserACL;
use Admailer\Models\User\Traits\UserRelationShips;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * Application's Traits (Separation of various types of methods)
     */
    use UserACL, UserRelationShips;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'last_name',
        'first_name',
        'role_id',
        'status',
        'phone_1',
        'phone_2' ,
        'city',
        'country'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

     /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public static function boot() {
        parent::boot();

        if(Route::getCurrentRoute()->getPath() !== 'password/reset'){
            // create a event to happen on updating
            static::updating(function($table)  {
                $table->updated_by = Auth::user()->username;
            });

            // create a event to happen on saving
            static::creating(function($table)  {
                $table->created_by = Auth::user()->username;
            });
        }
    }

}
