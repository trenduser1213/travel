@extends('admin.baseAdmin')

@section('title')
    Tambah Mengapa Kami
@endsection

@section('body')
    <div class="page-header">
        <h4 class="page-title">Tambah Mengapa Kami</h4>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('adminMengapaKami.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                {{ csrf_field() }}

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="judul">judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="Masukkan Kode Icon" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="icon">Icon</label>
                                    <input type="text" class="form-control" id="icon" name="icon"
                                        placeholder="Masukkan Kode Icon" value="" required>
                                </div>
                                <div class="form-group">
                                    <small class="text-info"><i class="fa fa-info-circle"></i> Bagaimana cara mendapatkan
                                        kode icon?
                                        <ul>
                                            <li>Klik halaman daftar icon, atau melalui <strong><a
                                                        href="{{ url('/icon/icons') }}">link
                                                        ini</a></strong></li>
                                            <li>Salin kode icon yang sesuai dengan yang anda butuhkan</li>
                                            <li>Tempel pada kolom kode icon di atas</li>
                                        </ul>
                                    </small>
                                    @error('gambar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="judul">Deskripsi</label>
                                    <textarea name="teks1" id="teks1" rows="3" class="form-control" placeholder="Masukkan Deskripsi" required></textarea>
                                    @error('teks1')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
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
