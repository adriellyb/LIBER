<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function create(Request $request){
        $book = new Book;
        $book->image = $request->image;
        $book->title = $request->title;
        $book->writer = $request->writer;
        $book->publisher = $request->publisher;
        $book->edition = $request->edition;
        $book->resume = $request->resume;
        $book->category = $request->category;
        $book->save();
        return response()->json(['book' => $book],200); /** resposta ao cliente, objeto 'book' com os dados do obj, status 200 = sucesso */
    }

    /** Funcao listar todos os livros  */
    public function index(){
        $books = Book::all();
        return response()->json(['book' => $books],200);
    }

    /** Funcao buscar livro pelo indice */
    public function show($id){
        $book = Book::find($id);
        return response()->json(['book' => $book],200);
    }

    /** Funcao atualizar dados */
    public function update(Request $request, $id){
        $book = Book::find($id);

        if ($request->image) {
            $book->image = $request->image;
        }

        if ($request->title) {
            $book->title = $request->title;
        }
        
        if ($request->writer) {
            $book->writer = $request->writer;
        }

        if ($request->publisher) {
            $book->publisher = $request->publisher;
        }

        if ($request->edition) {
            $book->edition = $request->edition;
        }

        if ($request->resume) {
            $book->resume = $request->resume;
        }

        if ($request->category) {
            $book->category = $request->category;
        }

        $book->save();
        return response()->json(['book' => $book],200);
    }

    /** Funcao destroy (deleta o livro) */
    public function destroy($id){
        $book = Book::find($id);
        $book->delete();
        return response()->json(['Livro deletado com sucesso!'],200);
    }
}
