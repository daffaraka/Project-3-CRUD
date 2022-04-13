@extends('layout.layout-main')
@section('title','Update Category')

@section('content')
<div class="row justify-content-center">
  <div class="col-lg-6">
    <div class="text-dark text-start bg-light p-4 rounded">
      <h1>Update Category</h1>
      <form method="post" action="{{route('category.update',$categoryData->id_category)}}">
        @csrf
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">
                  <i class="fa fa-book" aria-hidden="true"> </i>
                  Category Name</label>
              <input type="text" class="form-control" name="category" required autocomplete value="{{$categoryData->category}}">
              <div class="form-text">Determine Category Book</div>
          </div>
          <button type="submit" class="btn btn-primary"> <i class="fas fa-upload    "></i> Update</button>

      </form>
  </div>
  </div>
</div>




@endsection