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
                    <div class="form-group row">
                        <label for="nama_prodi" class="col-sm-3 col-form-label">Nama Prodi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_prodi"
                                placeholder="Nama Prodi">
                                @error('nama_prodi')
                                <span class ="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_dekan" class="col-sm-3 col-form-label">Nama Dekan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_dekan" placeholder="Nama Dekan">
                            @error('nama_dekan')
                                <span class ="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_wakil_dekan" class="col-sm-3 col-form-label">Nama Wakil Dekan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_wakil_dekan" placeholder="Wakil Dekan">
                            @error('nama_wakil_dekan')
                                <span class ="text-danger">{{ $message }}</span>
                                @enderror
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
