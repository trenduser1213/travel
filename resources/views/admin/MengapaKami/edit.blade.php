@extends('admin.baseAdmin')

@section('title')
    Edit Asosiasi
@endsection

@section('body')
    <div class="page-header">
        <h4 class="page-title">Edit Asosiasi</h4>
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
            <form action="{{ route('adminMengapaKami.update',$MengapaKami->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{ csrf_field() }}

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="judul">judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="Masukkan Nama Asosiasi" value="{{ $MengapaKami->judul }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="icon">icon</label>
                                    <input type="text" class="form-control" id="icon" name="icon"
                                        placeholder="Masukkan Nama Asosiasi" value="{{ $MengapaKami->icon }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="old">Logo Sekarang</label> <br>
                                    <center><img src="{{ '/assets' }}../../../{{ $MengapaKami->icon }}"
                                            alt="{{ $MengapaKami->icon }}" style="max-width: 50%; border :1px black"></center>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="teks1">Deskripsi</label>
                                    <textarea name="teks1" id="teks1" rows="3" class="form-control" placeholder="Masukkan Deskripsi" required>{{ $MengapaKami->deskripsi }}</textarea>
                                    @error('teks1')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="judul">Tampilkan
                                        di Beranda?</label>
                                    <select class="form-control" name="is_tampil" id="is_tampil" required>

                                        <option value="-" disabled selected>Pilih</option>
                                        @if ($MengapaKami->is_tampil === 'tidak')
                                            <option value="ya">Ya</option>
                                            <option value="tidak" selected>Tidak</option>
                                        @else
                                            <option value="ya" selected>Ya</option>
                                            <option value="tidak">Tidak</option>
                                        @endif
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="icon">Ganti Logo</label>
                                    <input type="file"
                                        class="form-control file-input @error('icon') is-invalid @enderror"
                                        accept=".jfif,.jpg,.jpeg,.png,.gif" id="image" name="icon">
                                    <center>
                                        <img id="preview-image-before-upload" alt="preview image"
                                            style="max-width:50%; margin-top:10px">
                                    </center> <br>
                                    <small class="text-danger"><i class="fa fa-info-circle"></i> Masukkan foto
                                        dengan
                                        ketentuan :
                                        <ul>
                                            <li>Ukuran maksimal 1 MB</li>
                                            <li>Background Logo sudah di hapus</li>
                                        </ul>
                                    </small>
                                    @error('icon')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div> --}}

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
