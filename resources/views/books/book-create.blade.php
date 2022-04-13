@extends('layout.layout-main')
@section('title','Add Book')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-6">
    <div class="text-dark text-start bg-light p-4 rounded">
      <h1>Add Book</h1>
      <form method="post" action="{{route('book.store')}}">
        @csrf
         <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">
                <i class="fa fa-bookmark" aria-hidden="true"></i>
                  Category Name</label>
              <select name="id_category" id="id_category"  class="form-control">
                @foreach ($categoryData as $data)
                    <option value="{{$data->id_category}}">{{$data->category}}</option>
                @endforeach
              </select>
              <div class="form-text">Choose book category</div>
         </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">
                  <i class="fa fa-book" aria-hidden="true"> </i>
                  Book Name</label>
              <input type="text" class="form-control" name="book_name" required autocomplete>
              <div class="form-text">Let people know with your book</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">
              <i class="fas fa-palette    "></i>
                Book Color</label>
            <input type="text" class="form-control" name="book_color" required autocomplete>
            <div  class="form-text">Determine this book category</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">
              <i class="fas fa-book-open    "></i>
                Book Pages</label>
            <input type="number" class="form-control" name="book_pages" required autocomplete>
            <div  class="form-text">Number of book pages</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">
                <i class="fa fa-user" aria-hidden="true"> </i>
                Author Name</label>
            <input type="text" class="form-control" name="book_author" required autocomplete>
            <div class="form-text">Enter author name</div>
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
  </div>
</div>




@endsection