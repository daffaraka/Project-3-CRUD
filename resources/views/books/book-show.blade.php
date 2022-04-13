@extends('layout.layout-main')
@section('title','Add Book')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="text-dark text-start bg-light p-4 rounded">
            <h1>Edit Book</h1>
            <hr>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">
                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                    Category Name</label>
                <input type="text" class="form-control" name="book_name" required autocomplete value="{{$bookDetail->Category->category}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">
                        <i class="fa fa-book" aria-hidden="true"> </i>
                        Book Name</label>
                    <input type="text" class="form-control" name="book_name" required autocomplete value="{{$bookDetail->book_name}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">
                    <i class="fas fa-palette    "></i>
                        Book Color</label>
                    <input type="text" class="form-control" name="book_color" required autocomplete value="{{$bookDetail->book_color}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">
                    <i class="fas fa-book-open    "></i>
                        Book Pages</label>
                    <input type="number" class="form-control" name="book_pages" required autocomplete value="{{{$bookDetail->book_pages}}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">
                        <i class="fa fa-user" aria-hidden="true"> </i>
                        Author Name</label>
                    <input type="text" class="form-control" name="book_author" required autocomplete value="{{$bookDetail->book_author}}" disabled>
                </div>
                    <a href="{{route('book.rent-isi-form', $bookDetail->id)}}" class="btn btn-primary">Rent Now</a>
          
        </div>
    </div>
</div>




@endsection