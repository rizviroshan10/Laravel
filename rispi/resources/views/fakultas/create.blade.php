@extends('layout.main')

@section('title', 'Tambah Fakultas')
@section('subtitle', 'Fakultas')
@section('content')

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Fakultas</h4>
                <p class="card-description">
                    Formulir Tambah Fakultas
                </p>
                <form class="forms-sample" action="{{ route('fakultas.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="nama_fakultas" class="col-sm-3 col-form-label">Nama Fakultas</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_fakultas"
                                placeholder="Nama Fakultas">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_dekan" class="col-sm-3 col-form-label">Nama Dekan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_dekan" placeholder="Nama Dekan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_wakil_dekan" class="col-sm-3 col-form-label">Nama Wakil Dekan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_wakil_dekan" placeholder="Wakil Dekan">
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
