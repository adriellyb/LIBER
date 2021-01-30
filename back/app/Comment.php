<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Comment extends Model
{
    public function createComment(Request $request){
        $this->subject = $request->subject;
        $this->content = $request->content;
        $this->save();
    }
}
