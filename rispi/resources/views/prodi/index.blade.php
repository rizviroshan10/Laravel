@extends('layout.main')

@section('title', 'Halaman Prodi')
@section('subtitle', 'Program Studi')


@section('content')
    @section('credit','Universitas Multi Data Palembang')
    <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 @if (Session::get('success'))
                  <div class="alert alert-success">
                    {{ Session::get('success')}}
                  </div>
                  @endif
                    <a href="{{route('prodi.create')}}" class="btn btn-primary">Tambah</a>
                  <h4 class="card-title">Program Studi</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Prodi</th>
                            <th>Nama Fakultas</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prodis as $item)
                        <tr>
                            <td>{{$item->nama_prodi}}</td>
                            <td>{{$item->Fakultas->nama_fakultas}}</td>
                            <td>{{$item->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>


    <table class="table table-hover">

    </table>
@endsection
