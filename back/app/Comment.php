<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Comment extends Model
{
    public function createComment(Request $request){
        $this->subject = $request->subject;
        $this->content = $request->content;
        $this->user_id = $request->user_id;
        $this->save();
    }

    public function updateComment(Request $request){

        if ($request->subject){
            $this->subject = $request->subject;
        }

        if ($request->content){
            $this->content = $request->content;
        }
        
        $this->save();
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function book(){
        return $this->belongsTo('App\Book');
    }

}
