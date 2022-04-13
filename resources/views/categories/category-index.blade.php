@extends('layout.layout-main')
@section('title','Category')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            @include('layout.partials.flash-message')
            <a href="{{route('category.create')}}" class="btn btn-secondary float-start my-2 px-3"> <i class="fa fa-book" aria-hidden="true"></i> Add New Category</a>
            <table class="table table-light my-4 shadow">
                <tbody class="text-start">
                    <tr class="table-secondary">
                        <th>#</th>
                        <th>Category Name</th>  
                        <th>Action</th>
                    </tr>
                    <?php $i=1 ?>
                    @foreach ($category as $data)
                    <tr>
                        <td>{{ $i++}} </td>
                        <td>{{$data->category}}</td>
                        <td>
                            <a href="{{route('category.edit',$data->id_category)}}" class="btn btn-primary shadow mr-2 px-3">Edit</a>
                            <form action="{{route('category.delete',$data->id_category)}}" method="POST" style="display:initial">
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