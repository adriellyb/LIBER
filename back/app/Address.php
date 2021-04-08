<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Address extends Model
{
    public function createAddress(Request $request){
        $this->address = $request->address;
        $this->number = $request->number;
        $this->complement = $request->complement;
        $this->district = $request->district;
        $this->city = $request->city;
        $this->save();
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function setAddress($user_id){
        $this->user_id = $user_id;
        $this->save();
    }
}
