@extends('admin.baseAdmin')

@section('title')
    Tambah Produk
@endsection

@section('body')
    <div class="page-header">
        <h4 class="page-title">Tambah Produk</h4>
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
            <form action="{{ route('adminProduk.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"><strong> Informasi Produk </strong></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="nama">Nama Produk</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan Nama Produk" value="" required>
                                    @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="slug">Kode Produk</label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        placeholder="Masukkan Kode Produk" value="" required>
                                    @error('slug')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="harga">Harga Produk</label>
                                    <input type="number" class="form-control" id="harga" name="harga"
                                        placeholder="Masukkan Harga Produk" value="" required>
                                    @error('harga')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Tanggal Berangkat</label>
                                    <input type="date" class="form-control" id="tgl_berangkat" name="tgl_berangkat"
                                        value="" required>
                                    @error('tgl_berangkat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="durasi">Durasi</label>
                                    <input type="text" class="form-control" id="durasi" name="durasi"
                                        placeholder="Masukkan Durasi Produk" value="" required>
                                    @error('durasi')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="total_seat">Total Seat</label>
                                    <input type="text" class="form-control" id="total_seat" name="total_seat"
                                        placeholder="Masukkan Total Seat" value="" required>
                                    @error('total_seat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="berangkat_dari">Kota Keberangkatan</label>
                                    <input type="text" class="form-control" id="berangkat_dari" name="berangkat_dari"
                                        placeholder="Masukkan Kota Keberangkatan" value="" required>
                                    @error('berangkat_dari')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hotel"> Hotel Tempat Menginap</label>
                                    <input type="text" class="form-control" id="hotel" name="hotel"
                                        placeholder="Masukkan Nama Hotel" value="" required>
                                    @error('hotel')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="maskapai">Maskapai Penerbangan</label>
                                    <input type="text" class="form-control" id="maskapai" name="maskapai"
                                        placeholder="Masukkan Maskapai Penerbangan" value="" required>
                                    @error('maskapai')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="kategori_paket">Kategori</label>
                                    <select name="kategori_paket" id="kategori_paket" class="form-control" required>
                                        <option value="-" selected disabled>Pilih Kategori</option>
                                        <option value="Umrah">Umrah</option>
                                        <option value="Haji">Haji</option>
                                    </select>
                                    @error('kategori_paket')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="is_tampil_di_beranda">Tampilkan di Halaman Beranda?</label>
                                    <select name="is_tampil_di_beranda" id="is_tampil_di_beranda" class="form-control"
                                        required>
                                        <option value="-" selected disabled>Pilih Opsi</option>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
                                    @error('is_tampil_di_beranda')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="is_tampil_di_halaman_produk">Tampilkan di Halaman Produk?</label>
                                    <select name="is_tampil_di_halaman_produk" id="is_tampil_di_beranda"
                                        class="form-control" required>
                                        <option value="-" selected disabled>Pilih Opsi</option>
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                    </select>
                                    @error('is_tampil_di_halaman_produk')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="gambar">Poster Produk</label>
                                    <input type="file"
                                        class="form-control file-input @error('gambar') is-invalid @enderror"
                                        accept=".jfif,.jpg,.jpeg,.png,.gif" id="image" name="gambar">
                                    @error('gambar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <img id="preview-image-before-upload" alt="preview image"
                                    style="max-height:250px; margin-left:30px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn btn-success" type="submit">Submit</button>
                    {{-- <button class="btn btn-danger">Cancel</button> --}}
                </div>
            </form>
        </div>
    </div>
@endsection
