<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     **/
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];
    
    //  public function is_admin()
    //  {
    //      if ($is_admin== 1)
    //      {
    //      return true;
    //      }
    //      return false;
    //  }
}


class Users extends Model
{
    protected $fillable = [
        'name',
        'email',
        'username',
        'is_admin',
    ];
}
 
?>