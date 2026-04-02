@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Halaman Edit Sekolah</h1>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark">Form Edit Sekolah</h4>
                    </div>
                    <div class="card-body">
                       <form action="{{ route('sekolah.update', $sekolah->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                         <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nama_sekolah">Nama Sekolah</label>
                                    <input type="text" class="form-control" id="nama_sekolah"
                                        name="nama_sekolah"
                                        value="{{ $sekolah->nama_sekolah }}"
                                        placeholder="masukkan nama sekolah">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        name="email"
                                        value="{{ $sekolah->email }}"
                                        placeholder="masukkan email">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="no_telp">Telepon</label>
                                    <input type="text" class="form-control" id="no_telp"
                                        name="no_telp"
                                        value="{{ $sekolah->no_telp }}"
                                        placeholder="masukkan nomor telepon">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat"
                                        name="alamat"
                                        cols="30" rows="5"
                                        placeholder="masukkan alamat">{{ $sekolah->alamat }}</textarea>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-between">
                                <a href="{{ route('sekolah.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </div>
                       </form>

                    </div>
                </div>
        </section>
@endsection
