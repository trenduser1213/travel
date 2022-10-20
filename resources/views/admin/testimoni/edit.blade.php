@extends('admin.baseAdmin')

@section('title')
    Edit Testimoni
@endsection

@section('body')
    <div class="page-header">
        <h4 class="page-title">Edit Testimoni</h4>
    </div>
    <div class="col-md-6">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                Data telah di tambahkan
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('adminTestimoni.update', $testimoni->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{ csrf_field() }}

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan Nama Pemberi Testimoni" value="{{ $testimoni->nama }}"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" name="jabatan"
                                        placeholder="Masukkan Jabatan Pemberi Testimoni" value="{{ $testimoni->jabatan }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="old">Foto Sekarang</label> <br>
                                            <img src="{{ '/assets' }}../../../{{ $testimoni->gambar }}"
                                                alt="{{ $testimoni->nama }}" style="max-width: 100%; border :1px black">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gambar">Ganti Foto</label>
                                            <input type="file"
                                                class="form-control file-input @error('gambar') is-invalid @enderror"
                                                accept=".jfif,.jpg,.jpeg,.png,.gif" id="image" name="gambar">
                                            <img id="preview-image-before-upload" alt="preview image"
                                                style="max-width:100%; margin-top:10px"> <br>
                                            <small class="text-danger"><i class="fa fa-info-circle"></i> Masukkan foto
                                                dengan
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
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-6">

                                <div class="form-group ">
                                    <label for="judul">Pesan Testimoni</label>
                                    <textarea name="testimoni" id="testimoni" name="testimoni" class="form-control" rows="5">{{ $testimoni->testimoni }}</textarea>
                                    <small class="text-danger"><i class="fa fa-info-circle"></i> Testimoni di sarankan
                                        maksimal 40 kata</small>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Tampilkan
                                        di Beranda?</label>
                                    <select class="form-control" name="is_tampil" id="is_tampil" required>

                                        <option value="-" disabled selected>Pilih</option>
                                        @if ($testimoni->is_tampil === 'tidak')
                                            <option value="ya">Ya</option>
                                            <option value="tidak" selected>Tidak</option>
                                        @else
                                            <option value="ya" selected>Ya</option>
                                            <option value="tidak">Tidak</option>
                                        @endif
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
