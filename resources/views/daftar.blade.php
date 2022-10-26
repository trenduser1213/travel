@extends('layout.template')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <!-- .wpo-breadcumb-area start -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Registrasi Jama'ah</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .wpo-breadcumb-area end -->

    <!-- form-area-start -->
    <div class="wpo-donation-page-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-aligncenter">
                    <div class="row">
                        <div class="col-lg-8">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <h2>Data Jama'ah</h2>
                            <div id="Donations" class="tab-pane">
                                <form method="POST" action="{{ $produk->slug }}/store" enctype="multipart/form-data">
                                    @csrf
                                    <div class="wpo-donations-details">
                                        <h2>Data Diri</h2>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <label for="nama" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama" id="nama"
                                                    placeholder="Masukkan nama anda" value="{{ old('nama') }}" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="jeniskelamin" id="jeniskelamin" style="font-size: 14px;" required>
                                                    <option selected disabled style="font-size: 14px;">Pilih Jenis Kelamin
                                                    </option>
                                                    <option value="laki-laki"
                                                        {{ old('jeniskelamin') == 'laki-laki' ? 'selected' : '' }}>Laki-laki
                                                        / Male</option>
                                                    <option value="perempuan"
                                                        {{ old('jeniskelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan
                                                        / Female</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <label for="HP" class="form-label">No. HP</label>
                                                <input type="tel" name="HP" id="HP"
                                                    class="form-control @error('HP') is-invalid @enderror"
                                                    placeholder="Masukkan nomor HP/WA" value="{{ old('HP') }}" required>
                                                @error('HP')
                                                    <small class="text-danger"> {{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    id="email" placeholder="Masukkan alamat E-mail"
                                                    value="{{ old('email') }}" required>
                                                @error('email')
                                                    <small class="text-danger"> {{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-lg-12 col-md-6 col-sm-6 col-12 form-group">
                                                <label for="NIK" class="form-label">NIK (Nomor Induk
                                                    Kependudukan)</label>

                                                <input type="number"
                                                    class="form-control @error('NIK') is-invalid @enderror" name="NIK"
                                                    id="NIK" placeholder="Masukkan NIK sesuai KTP"
                                                    value="{{ old('NIK') }}" required>
                                                @error('NIK')
                                                    <small class="text-danger"> {{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-lg-12 col-md-6 col-sm-6 col-12 form-group">
                                                <label for="no_paspor" class="form-label">Nomor Paspor</label>
                                                <input type="text" class="form-control" name="no_paspor" id="no_paspor"
                                                    placeholder="Masukkan Nomor Paspor" value="{{ old('no_paspor') }}">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <label for="foto_KTP" class="form-label">Scan KTP</label><br>
                                                <small>*dalam bentuk JPG/JPEG max. 1 MB</small>
                                                <div class="file-drop-area">
                                                    <input type="file"
                                                        class="file-input @error('foto_KTP') is-invalid @enderror"
                                                        accept=".jfif,.jpg,.jpeg,.png,.gif"
                                                        style="border: none; font-size: small; margin-left: -40px;margin-top:-25px;"
                                                        id="foto_KTP" name="foto_KTP" required>
                                                </div>
                                                @error('foto_KTP')
                                                    <small class="text-danger"> {{ $message }}</small>
                                                @enderror
                                                <div id="divImageMediaPreview"
                                                    style="margin-left: -10px; margin-top:-50px;">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <label for="foto_vaksin" class="form-label">Scan Sertifikat Vaksin
                                                    Booster</label> <br>
                                                <small>*dalam bentuk JPG/JPEG max. 1 MB</small>
                                                <div class="file-drop-area">
                                                    <input type="file"
                                                        class="file-input2 @error('foto_vaksin') is-invalid @enderror"
                                                        accept=".jfif,.jpg,.jpeg,.png,.gif"
                                                        style="border: none; font-size: small; margin-left: -40px; margin-top:-25px;"
                                                        id="foto_vaksin" name="foto_vaksin" required>
                                                </div>
                                                @error('foto_vaksin')
                                                    <small class="text-danger"> {{ $message }}</small>
                                                @enderror
                                                <div id="divImageMediaPreview2"
                                                    style="margin-left: -10px; margin-top:-50px;">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <h2>Data Alamat</h2>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 form-group clearfix">
                                                <label for="provinsi" class="form-label">Provinsi</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="provinsi" id="provinsi" style="font-size: 14px;" required>
                                                    <option selected style="font-size: 14px;"disabled>Pilih Provinsi
                                                    </option>
                                                    @foreach ($provinsi as $provinsi)
                                                        <option value="{{ $provinsi->id }}">{{ $provinsi->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 form-group clearfix">
                                                <label for="kabupaten" class="form-label">Kabupaten</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="kabupaten" id="kabupaten" style="font-size: 14px;" required>
                                                    <option selected style="font-size: 14px;" disabled>Pilih Kabupaten
                                                    </option>
                                                    @foreach ($kabupaten as $kabupaten)
                                                        <option value="{{ $kabupaten->id }}">{{ $kabupaten->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12 form-group clearfix">
                                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="kecamatan" id="kecamatan" style="font-size: 14px;" required>
                                                    <option selected style="font-size: 14px;" disabled>Pilih Kecamatan
                                                    </option>
                                                    @foreach ($kecamatan as $kecamatan)
                                                        <option value="{{ $kecamatan->id }}">{{ $kecamatan->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-12 col-12 form-group">
                                                <label for="alamat" class="form-label">Alamat Lengkap</label>
                                                <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat lengkap dengan kode pos"
                                                    required>{{ old('alamat') }}</textarea>
                                            </div>

                                        </div>
                                        <br>
                                        <h2>Pembayaran</h2>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <label for="produk" class="form-label">Nama Produk</label>
                                                <input type="text" class="form-control" name="produk" id="produk"
                                                    value="{{ $produk->nama }}" disabled>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <label for="harga" class="form-label">Total Biaya</label>
                                                <input type="text" class="form-control" name="produk" id="produk"
                                                    value="{{ $produk->harga }}" disabled>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <label for="pembiayaan" class="form-label">Jenis
                                                    Pembiayaan</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="pembiayaan" id="pembiayaan" style="font-size: 14px;">
                                                    <option selected style="font-size: 14px;" disabled>Pilih Jenis
                                                        Pembiayaan</option>
                                                    <option value="Cash"
                                                        value="{{ old('pembiayaan') == 'Cash' ? 'selected' : '' }}">Cash
                                                    </option>
                                                    <option value="Pembiayaan"
                                                        value="{{ old('pembiayaan') == 'Pembiayaan' ? 'selected' : '' }}">
                                                        Pembiayaan</option>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                                <label for="setoran_awal" class="form-label">Setoran Awal</label>
                                                <input type="number"
                                                    class="form-control  @error('setoran_awal') is-invalid @enderror"
                                                    name="setoran_awal" id="setoran_awal"
                                                    placeholder="Masukkan jumlah setoran pertama"
                                                    value="{{ old('setoran_awal') }}" required>
                                                @error('setoran_awal')
                                                    <small class="text-danger"> {{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="submit-area">
                                                <button type="submit" class="theme-btn submit-btn">Daftar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h2>Produk</h2>
                            <div class="post ">
                                <div class="service-single-img">
                                    <img src="../../{{ $produk->gambar }}"
                                        style="height:auto;"alt="{{ $produk->slug }}">
                                </div>
                                <div class="service-text">
                                    <div class="product-badge">
                                        @if ($produk->kategori_paket == 'Haji')
                                            <div class="text-haji">
                                                <span>{{ $produk->kategori_paket }}</span>
                                            </div>
                                        @else
                                            <div class="text-umrah">
                                                <span>{{ $produk->kategori_paket }}</span>
                                            </div>
                                        @endif

                                    </div>
                                    <h2><a href="service-single.html">{{ $produk->nama }}</a></h2>
                                    <br>
                                    <div class="entry-bottom">
                                        <p style="font-size: small"><i class="fa fa-calendar fa-sm"></i> Berangkat
                                        </p>
                                        <p style="font-size: small;" class="text-right">
                                            {{ $produk->tgl_berangkat }}</p>
                                    </div>
                                    <div class="entry-bottom">
                                        <p style="font-size: small"><i class="fa fa-clock-o fa-sm"></i> Durasi</p>
                                        <p style="font-size: small;" class="text-right">{{ $produk->durasi }}
                                        </p>
                                    </div>
                                    <div class="entry-bottom">
                                        <p style="font-size: small"><i class="fa fa-user fa-sm"></i> Total Seat</p>
                                        <p style="font-size: small;" class="text-right">{{ $produk->total_seat }}
                                        </p>
                                    </div>
                                    <div class="entry-bottom">
                                        <p style="font-size: small"><i class="fa fa-map-marker fa-sm"></i>
                                            Berangkat Dari
                                        </p>
                                        <p style="font-size: small;" class="text-right">
                                            {{ $produk->berangkat_dari }}
                                        </p>
                                    </div>
                                    <div class="entry-bottom">
                                        <p style="font-size: small"><i class="fa fa-hotel fa-sm"></i> Hotel</p>
                                        <p style="font-size: small;" class="text-right">{{ $produk->hotel }}
                                        </p>
                                    </div>
                                    <div class="entry-bottom">
                                        <p style="font-size: small"><i class="fa fa-plane fa-sm"></i> Maskapai</p>
                                        <p style="font-size: small;" class="text-right">{{ $produk->maskapai }}
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <h2>Data Mitra</h2>
                            <div class="profile-widget1">

                                <div class="profile-img" style="margin-top: -50px;">
                                    @if ($mitra->foto != null)
                                        <img src="{{ asset('assets/') }}../../{{ $mitra->foto }}" alt=""
                                            style="width: 150px; height: 150px">
                                    @else
                                    @endif
                                    <div class="entry-bottom" style="margin-bottom:-40px">
                                        <p style="font-size: small"><i class="fa fa-phone-square"></i> No. HP</p>
                                        <p style="font-size: small;" class="text-right">{{ $mitra->hp }}</p>
                                    </div>
                                    @if ($mitra->ktp != null)
                                        <div class="entry-bottom" style="margin-bottom:-40px">
                                            <p style="font-size: small"><i class="fa fa-user"></i> No. KTP</p>
                                            <p style="font-size: small;" class="text-right">1234567890</p>
                                        </div>
                                    @else
                                    @endif
                                    <div class="entry-bottom" style="margin-bottom:-40px">
                                        <p style="font-size: small"><i class="fa fa-money"></i> Kode Marketing</p>
                                        <p style="font-size: small;" class="text-right">{{ $mitra->username }}</p>
                                    </div>
                                    <div class="entry-bottom" style="margin-bottom:-20px;">
                                        <p style="font-size: small"><i class="fa fa-map-marker"></i>Alamat</p>
                                        <p style="font-size: small" class="text-right">
                                            {{ $mitra->alamat }}</p>
                                    </div>
                                </div>
                                <div class="pro-social">
                                    <ul>
                                        <li>
                                            <h3>{{ $mitra->nama }}</h3>
                                        </li>
                                        <li>
                                            <p>{{ $mitra->kota }}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- form-area-end -->
@endsection
