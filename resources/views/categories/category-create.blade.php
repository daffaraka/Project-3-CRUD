@extends('layout.layout-main')
@section('title','Add New Category')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-6">
    <div class="text-dark text-start bg-light p-4 rounded">
      <h1>Add Book</h1>
      <form method="post" action="{{route('category.store')}}">
        @csrf
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">
                  <i class="fa fa-book" aria-hidden="true"> </i>
                  Category Name</label>
              <input type="text" class="form-control" name="category" required autocomplete>
              <div class="form-text">Let people know with your book</div>
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
  </div>
</div>




@endsection