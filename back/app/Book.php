<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Book extends Model
{
    public function createBook(Request $request){
        $this->title = $request->title;
        $this->writer = $request->writer;
        $this->publisher = $request->publisher;
        $this->edition = $request->edition;
        $this->resume = $request->resume;
        $this->category = $request->category;
        $this->save();
    }

    /*public function updateBook(Request $request, $id){

        if ($request->title){
            $this->title = $request->title;
        }

        if ($request->writer){
            $this->writer = $request->writer;
        }

        if ($request->publisher){
            $this->publisher = $request->publisher;
        }

        if ($request->edition){
            $this->edition = $request->edition;
        }

        if ($request->resume){
            $this->resume = $request->resume;
        }

        if ($request->category){
            $this->category = $request->category;
        }
        $this->save();
    }*/
}
