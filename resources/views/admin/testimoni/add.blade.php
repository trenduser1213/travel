@extends('admin.baseAdmin')

@section('title')
    Tambah Testimoni
@endsection

@section('body')
    <div class="page-header">
        <h4 class="page-title">Tambah Testimoni</h4>
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
                                        placeholder="Masukkan Nama Pemberi Testimoni" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" name="jabatan"
                                        placeholder="Masukkan Jabatan Pemberi Testimoni" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Foto</label>
                                    <input type="file"
                                        class="form-control file-input @error('gambar') is-invalid @enderror"
                                        accept=".jfif,.jpg,.jpeg,.png,.gif" id="image" name="gambar">
                                    <small class="text-danger"><i class="fa fa-info-circle"></i> Masukkan foto dengan
                                        ketentuan :
                                        <ul>
                                            <li>ukuran maksimal 1 MB</li>
                                            <li>resolusi 1000x1000px (1:1)</li>
                                        </ul>
                                    </small>
                                    @error('gambar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <img id="preview-image-before-upload" alt="preview image"
                                    style="max-height:250px; margin-left:30px;">

                            </div>

                            <div class="col-md-6">

                                <div class="form-group ">
                                    <label for="judul">Pesan Testimoni</label>
                                    <textarea name="testimoni" id="testimoni" name="testimoni" class="form-control" rows="5"></textarea>
                                    <small class="text-danger"><i class="fa fa-info-circle"></i> Testimoni di sarankan
                                        maksimal 40 kata</small>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Tampilkan
                                        di Beranda?</label>
                                    <select class="form-control" name="is_tampil" id="is_tampil" required>
                                        <option value="-" disabled selected>Pilih</option>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
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
