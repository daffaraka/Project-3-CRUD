@extends('layout.layout-main')
@section('title','Buku')


@section('content')
<div class="container p-0">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            @include('layout.partials.flash-message')
            <a href="{{route('book.create')}}" class="btn btn-secondary float-start my-2"> <i class="fa fa-book" aria-hidden="true"></i> Add Book</a>
            <table class="table table-light my-4 shadow">
                <tbody class="text-start">
                    <tr class="table-secondary">
                        <th>#</th>
                        <th>Books</th>
                        <th>Category</th>
                        <th>Book Color</th>
                        <th>Book Pages</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                    <?php $i=1 ?>
                    @foreach ($bookData as $data)
                    <tr>
                        <td>{{ $i++}} </td>
                        <td>{{$data->book_name}}</td>
                        <td>{{$data->Category->category}}</td>
                        <td>{{$data->book_color}}</td>
                        <td>{{$data->book_pages}} sheets</td>
                        <td>{{$data->book_author}}</td>
                        <td>
                            <a href="{{route('book.show',$data->id)}}" class="btn btn-secondary">Show and rent</a>
                            <a href="{{route('book.edit',$data->id)}}" class="btn btn-primary shadow mr-2 px-3">Edit</a>
                            <form action="{{route('book.delete',$data->id)}}" method="POST" style="display:initial">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="btn btn-danger shadow">Delete</button>
                            </form>
                           
                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
       
    </div>
</div>

  
@endsection