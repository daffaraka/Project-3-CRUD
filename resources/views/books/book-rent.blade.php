@extends('layout.layout-main')
@section('title','Fill Form for rent Book')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="text-dark text-start bg-light p-4 rounded">
            <h1>Edit Book</h1>
            <hr>
            <form action="{{route('book.rent_now',$bookData->id)}}" method="POST">
                @csrf
                <input type="integer" hidden value="{{$bookData->id}}">
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">
                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                    Category Name</label>
                <input type="text" class="form-control" name="book_name" required autocomplete value="{{$bookData->Category->category}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">
                        <i class="fa fa-book" aria-hidden="true"> </i>
                        Book Name</label>
                    <input type="text" class="form-control" name="book_name" required autocomplete value="{{ $bookData->book_name}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        Name </label>
                    <input type="text" class="form-control" name="peminjam_nama" required autocomplete>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">
                        <i class="fa fa-book" aria-hidden="true"> </i>
                        Email Name</label>
                    <input type="text" class="form-control" name="peminjam_email" required autocomplete>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">
                        <i class="fa fa-book" aria-hidden="true"> </i>
                         Contact Number</label>
                    <input type="number" class="form-control" name="peminjam_nomorhp" required autocomplete>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">
                        <i class="fa fa-book" aria-hidden="true"> </i>
                        Date borrowed</label>
                    <input type="date" class="form-control" name="waktu_meminjam" required autocomplete>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">
                        <i class="fa fa-book" aria-hidden="true"> </i>
                        Duration ( In Days )</label>
                    <input type="number" class="form-control" name="duration" required autocomplete>
                </div>
                <button type="submit" class="btn btn-primary">Rent Now</button>
            </form>   
        </div>
    </div>
</div>




@endsection