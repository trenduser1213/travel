@extends('admin.baseAdmin')
@section('body')
    <div class="page-header">
        <h4 class="page-title">Edit Produk</h4>
    </div>
    <div class="col-md-6">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                Perubahan telah tersimpan!
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('adminProduk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- @csrf_field{{ method_field('PUT') }} --}}
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"><strong> Informasi Produk {{ $produk->id }} </strong></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="nama">Nama Produk</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan Nama Produk" value="{{ $produk['nama'] }}" required>
                                    @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="slug">Kode Produk</label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                        placeholder="Masukkan Kode Produk" value="{{ $produk['nama'] }}" required>
                                    @error('slug')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="harga">Harga Produk</label>
                                    <input type="text" class="form-control" id="harga" name="harga"
                                        placeholder="Masukkan Harga Produk" value="{{ $produk->harga }}" required>
                                    @error('harga')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Tanggal Berangkat</label>
                                    <input type="date" class="form-control" id="tgl_berangkat" name="tgl_berangkat"
                                        value="{{ $produk->tgl_berangkat }}" required>
                                    @error('tgl_berangkat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="durasi">Durasi</label>
                                    <input type="text" class="form-control" id="durasi" name="durasi"
                                        placeholder="Masukkan Durasi Produk" value="{{ $produk['durasi'] }}" required>
                                    @error('durasi')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="total_seat">Total Seat</label>
                                    <input type="text" class="form-control" id="total_seat" name="total_seat"
                                        placeholder="Masukkan Total Seat" value="{{ $produk['total_seat'] }}" required>
                                    @error('total_seat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="berangkat_dari">Kota Keberangkatan</label>
                                    <input type="text" class="form-control" id="berangkat_dari" name="berangkat_dari"
                                        placeholder="Masukkan Kota Keberangkatan" value="{{ $produk['berangkat_dari'] }}"
                                        required>
                                    @error('berangkat_dari')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hotel"> Hotel Tempat Menginap</label>
                                    <input type="text" class="form-control" id="hotel" name="hotel"
                                        placeholder="Masukkan Nama Hotel" value="{{ $produk['hotel'] }}" required>
                                    @error('hotel')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="maskapai">Maskapai Penerbangan</label>
                                    <input type="text" class="form-control" id="maskapai" name="maskapai"
                                        placeholder="Masukkan Maskapai Penerbangan" value="{{ $produk['maskapai'] }}"
                                        required>
                                    @error('maskapai')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="kategori_paket">Kategori</label>
                                    <select name="kategori_paket" id="kategori_paket" class="form-control" required>
                                        @if ($produk->kategori_paket === 'Umrah')
                                            <option value="-"disabled>Pilih Kategori</option>
                                            <option value="Umrah" selected>Umrah</option>
                                            <option value="Haji">Haji</option>
                                        @else
                                            <option value="-"disabled>Pilih Kategori</option>
                                            <option value="Umrah">Umrah</option>
                                            <option value="Haji" selected>Haji</option>
                                        @endif

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

                                        @if ($produk->is_tampil_di_beranda === 'tidak')
                                            <option value="ya">Ya</option>
                                            <option value="tidak" selected>Tidak</option>
                                        @else
                                            <option value="ya" selected>Ya</option>
                                            <option value="tidak">Tidak</option>
                                        @endif
                                    </select>
                                    @error('is_tampil_di_beranda')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="is_tampil_di_halaman_produk">Tampilkan di Halaman Produk?</label>
                                    <select name="is_tampil_di_halaman_produk" id="is_tampil_di_beranda"
                                        class="form-control" required>
                                        <option value="-" disabled selected>Pilih</option>
                                        @if ($produk->is_tampil_di_halaman_produk === 'tidak')
                                            <option value="ya">Ya</option>
                                            <option value="tidak" selected>Tidak</option>
                                        @else
                                            <option value="ya" selected>Ya</option>
                                            <option value="tidak">Tidak</option>
                                        @endif
                                    </select>
                                    @error('is_tampil_di_halaman_produk')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="old">Foto Sekarang</label> <br>
                                    <img src="{{ '/assets' }}../../../{{ $produk->gambar }}"
                                        alt="{{ $produk->nama }}" style="max-width: 70%; border :1px black">
                                </div>


                                <div class="form-group">
                                    <label for="gambar">Ganti Foto</label>
                                    <input type="file"
                                        class="form-control file-input @error('gambar') is-invalid @enderror"
                                        accept=".jfif,.jpg,.jpeg,.png,.gif" id="image" name="gambar">
                                    <img id="preview-image-before-upload" alt="preview image"
                                        style="max-width:70%; margin-top:10px"> <br>
                                    <small class="text-danger"><i class="fa fa-info-circle"></i> Masukkan foto
                                        dengan
                                        ketentuan :
                                        <ul>
                                            <li>ukuran maksimal 1 MB</li>
                                            <li>resolusi disarankan 800x1000px (4:5)</li>
                                        </ul>
                                    </small>
                                    @error('gambar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

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
