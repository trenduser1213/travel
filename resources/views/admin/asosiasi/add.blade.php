@extends('admin.baseAdmin')

@section('title')
    Tambah Asosiasi
@endsection

@section('body')
    <div class="page-header">
        <h4 class="page-title">Tambah Asosiasi</h4>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('adminGaleriFoto.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                {{ csrf_field() }}

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan Nama Asosiasi" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file"
                                        class="form-control file-input @error('logo') is-invalid @enderror"
                                        accept=".jfif,.jpg,.jpeg,.png,.gif" id="logo" name="logo">
                                    <small class="text-danger"><i class="fa fa-info-circle"></i> Masukkan foto dengan
                                        ketentuan :
                                        <ul>
                                            <li>ukuran maksimal 1 MB</li>
                                            <li>Background sudah di hapus</li>
                                        </ul>
                                    </small>
                                    @error('gambar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="judul">Tampilkan
                                        di Beranda?</label>
                                    <select class="form-control" name="is_tampil" id="is_tampil" required>
                                        <option value="-" disabled selected>Pilih</option>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Preview Gambar</label> <br>
                                    <img id="preview-image-before-upload" alt="preview image" style="max-height:250px;">
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success" type="submit">Simpan</button>
                        <button class="btn btn-danger">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
