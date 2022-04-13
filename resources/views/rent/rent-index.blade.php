@extends('layout.layout-main')
@section('title','Rent List')

@section('content')
<div class="container p-0">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            @include('layout.partials.flash-message')
            @if (count($peminjaman)== 0)
                  <h1>There's no rent data</h1>
            @else
            <table class="table table-light my-4 shadow">
                <tbody class="text-start">
                    <tr class="table-secondary">
                        <th>#</th>
                        <th>Renter Name</th>
                        <th>Renter Email</th>
                        <th>Contact</th>
                        <th>Rent Date</th>
                        <th>Book Name</th>
                        <th>Duration</th>
                    </tr>
                    <?php $i=1 ?>
                    @foreach ($peminjaman as $data)
                    <tr>
                        <td>{{ $i++}} </td>
                        <td>{{$data->peminjam_nama}}</td>
                        <td>{{$data->peminjam_email}}</td>
                        <td>{{$data->peminjam_nomorhp}}</td>
                        <td>{{$data->waktu_meminjam}}</td>
                        <td>{{$data->Books->book_name}}</td>
                        <td> <label class="btn btn-secondary px-3 py-0">{{$data->duration}}</label>  Days</td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
            @endif
           
           
          

        </div>
    </div>
</div>


@endsection