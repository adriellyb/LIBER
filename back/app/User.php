<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class User extends Model
{
    public function createUser(Request $request){
        $this->name = $request->name;
        $this->email = $request->email;
        $this->password = $request->password;
        $this->cpf = $request->cpf;
        $this->phone = $request->phone;
        $this->address = $request->address;
        $this->number = $request->number;
        $this->complement = $request->complement;
        $this->district = $request->district;
        $this->city = $request->city;
        $this->save();
    }
}

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
