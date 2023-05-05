@extends('layout.main')

@section('title', 'Tambah Fakultas')
@section('subtitle', 'Create new')
@section('content')
<div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Program Studi</h4>
                <p class="card-description">
                   Formulir Tambah Program Studi
                </p>
                <form class="forms-sample" action="{{ route('prodi.store') }}" method="post">
                    @csrf
                    <div class="form-group ">
                        <label for="nama_prodi" class="col-sm-3 col-form-label">Tambah Prodi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_prodi"
                                placeholder="Tambah Prodi"
                                value="{{old('nama_prodi')}}">
                                @error('nama_prodi')
                                <span class ="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fakultas_id">Pilih Fakultas</label>
                        <select name="fakultas_id" class="form-control">
                            @foreach ($fakultas as $item)
                            <option value="{{$item->id}}">{{$item->nama_fakultas}}</option>
                            @endforeach
                           </select>
                           @error('nama_fakultas')
                           <span class="text-danger">{{$message}}</span>
                           @enderror
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    <a href="{{route('prodi.index')}}" class="btn btn-rounded btn light">Cancel</a>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
