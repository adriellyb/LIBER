<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Book;

class CommentController extends Controller
{
    public function create(Request $request){
        $comment = new Comment;
        $comment->subject = $request->subject;
        $comment->content = $request->content;
        $comment->save();

        return response()->json(['comment' => $comment],200);
    }

    /** Funcao que lista todos os comentarios */
    public function index(){
        $comments = Comment::all();
        return response()->json(['comment' => $comments],200);
    }

    /** Funcao que busca o comentario pelo indice */
    public function show($id){
        $comment = Comment::find($id);
        return response()->json(['comment' => $comment],200);
    }

    /** Funcao atualizar dados */
    public function update(Request $request, $id){
        $comment = Comment::find($id);

        if ($request->subject) {
            $comment->subject = $request->subject;
        }

        if ($request->content) {
            $comment->content = $request->content;
        }

        $comment->save();
        return response()->json(['comment' => $comment],200);
    }

    /** Funcao destroy (deleta o comentario) */
    public function destroy($id){
        $comment = Comment::find($id);
        $comment->delete();
        
        return response()->json(['Comentário deletado com sucesso!'],200);
    }

    /** Função mostrar o comentario no post */
    public function commentInPostBook($book_id){
        $book = Book::find($book_id);
        if($book){
            $comments = $book->comments;
            return response()->json($comments);
        }else{
            return response()->json(['Este livro não existe.']);
        }
    }
}