@extends('admin.baseAdmin')

@section('title')
    Tambah Video
@endsection

@section('body')
    <div class="page-header">
        <h4 class="page-title">Tambah Foto</h4>
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
            <form action="{{ route('adminGaleriFoto.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                {{ csrf_field() }}

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="Masukkan Judul Foto" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="link">File Foto</label>
                                    <input type="file"
                                        class="form-control file-input @error('link') is-invalid @enderror"
                                        accept=".jfif,.jpg,.jpeg,.png,.gif" id="image" name="link">
                                    @error('link')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <img id="preview-image-before-upload" alt="preview image"
                                    style="max-height:250px; margin-left:30px;">

                            </div>

                            <div class="col-md-6">

                                <div class="form-group ">
                                    <label for="judul">Tampilkan
                                        di Beranda?</label>
                                    <select class="form-control" name="is_tampil_di_beranda" id="is_tampil_di_beranda"
                                        required>
                                        <option value="-" disabled selected>Pilih</option>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="judul" class="col-md-4 col-md-offset-1 control-label">Tampilkan
                                        di Galeri?</label>
                                    <select class="form-control" name="is_tampil_di_galeri" id="is_tampil_di_galeri"
                                        required>
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
