<?php

namespace App;

/*use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;*/

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class User extends Model
{
    public function createUser(Request $request){
        $this->name = $request->name;
        $this->email = $request->email;
        $this->password = $request->password;
        $this->cpf = $request->cpf;
        $this->birth = $request->birth;
        $this->phone = $request->phone;
        $this->image = $request->image;
        $this->save();
    }

    public function address(){
        return $this->hasOne('App\Address');
    } 
    
    public function comment(){
        return $this->hasMany('App\Comment');
    } 
}
