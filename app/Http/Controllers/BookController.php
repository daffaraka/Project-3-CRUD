<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
   
    public function index()
    {
        $bookData = Book::with('Category')->get();
      
        return view('books.book-index',compact(['bookData']));
    }

   
    public function create()
    {
        $categoryData = Category::all();
        return view('books.book-create',compact(['categoryData']));
    }


    public function store(Request $request)
    {
      
        Book::create($request->all());

        return redirect()->route('book.index')->with('success','A new book has been created');
    }

    
    public function show($id)
    {

        $bookDetail = Book::with('Category')->find($id);

        return view('books.book-show',compact('bookDetail'));
    }

   
    public function edit($id)
    {
        $bookEdit = Book::find($id);
        $category = Category::all();
        return view('books.book-edit',compact(['bookEdit','category']));
    }

 
    public function update(Request $request, $id)
    {
        $bookData = Book::find($id);
        $bookData->update($request->all());

        return redirect()->route('book.index')->with('success','Book has been updated');
    }

    
    public function destroy($id)
    {
        $book = Book::where('id',$id)->first();
        if ($book != null) {
            $book->delete();
            return redirect()->route('book.index')->with(['message'=> 'Successfully deleted!!']);
        }
  
        return redirect()->refresh();
    }

    public function rent_index()
    {
        $peminjaman = Peminjaman::with('Books')->get();

        return view('rent.rent-index',compact('peminjaman'));
    }

    public function isi_form($id)
    {
        $bookData = Book::find($id);

        return view('books.book-rent',compact('bookData'));
    }

    public function rent_now(Request $request, $id)
    {
        $book = Book::find($id);
        $Bookid =  $book->id;

       
        DB::table('peminjaman_book')->insert([
            'id_book' => $Bookid,
            'peminjam_nama' => $request->peminjam_nama,
            'peminjam_email' =>$request->peminjam_email ,
            'peminjam_nomorhp'=> $request->peminjam_nomorhp,
            'waktu_meminjam'=> $request->waktu_meminjam,
            'duration'=> $request->duration,
           
        ]);

        return redirect()->route('rent.index')->with('success',$request->peminjam_nama.' have been rented a book ');
    }
}
