@extends('admin.baseAdmin')

@section('title')
    Edit Mengapa Kami
@endsection

@section('body')
    <div class="page-header">
        <h4 class="page-title">Edit Mengapa Kami</h4>
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
            <form action="{{ route('adminMengapaKami.update', $MengapaKami->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{ csrf_field() }}

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="Masukkan Nama Mengapa Kami" value="{{ $MengapaKami->judul }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="icon">Kode Icon</label>
                                    <input type="text" class="form-control" id="icon" name="icon"
                                        placeholder="Masukkan Kode Icon" value="{{ $MengapaKami->icon }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="old">Icon Sekarang</label> <br>
                                    <p style="font-size: 700%"><i class="{{ $MengapaKami->icon }}"></i></p>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn btn-success" type="submit">Simpan</button>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection
