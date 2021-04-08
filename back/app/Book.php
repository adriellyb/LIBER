<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Book extends Model
{
    public function createBook(Request $request){
        $this->image = $request->image;
        $this->title = $request->title;
        $this->writer = $request->writer;
        $this->publisher = $request->publisher;
        $this->edition = $request->edition;
        $this->resume = $request->resume;
        $this->category = $request->category;
        $this->save();
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

}
