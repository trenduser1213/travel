@extends('admin.baseAdmin')

@section('title')
    Tambah Jama'ah
@endsection

@section('body')
    <div class="page-header">
        <h4 class="page-title">Tambah Jama'ah</h4>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('adminJamaah.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">
                        <h4>Data Diri</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Masukkan nama anda" value="{{ old('nama') }}" required>
                            </div>
                            <div class="col-lg-6 form-group clearfix">
                                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-control" aria-label="Default select example" name="jeniskelamin"
                                    id="jeniskelamin" style="font-size: 14px;" required>
                                    <option selected disabled style="font-size: 14px;">Pilih Jenis Kelamin
                                    </option>
                                    <option value="laki-laki" {{ old('jeniskelamin') == 'laki-laki' ? 'selected' : '' }}>
                                        Laki-laki
                                        / Male</option>
                                    <option value="perempuan" {{ old('jeniskelamin') == 'perempuan' ? 'selected' : '' }}>
                                        Perempuan
                                        / Female</option>
                                </select>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="HP" class="form-label">No. HP</label>
                                <input type="tel" name="HP" id="HP"
                                    class="form-control @error('HP') is-invalid @enderror"
                                    placeholder="Masukkan nomor HP/WA" value="{{ old('HP') }}" required>
                                @error('HP')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="Masukkan alamat E-mail"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="NIK" class="form-label">NIK (Nomor Induk
                                    Kependudukan)</label>

                                <input type="number" class="form-control @error('NIK') is-invalid @enderror" name="NIK"
                                    id="NIK" placeholder="Masukkan NIK sesuai KTP" value="{{ old('NIK') }}"
                                    required>
                                @error('NIK')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="no_paspor" class="form-label">Nomor Paspor</label>
                                <input type="text" class="form-control" name="no_paspor" id="no_paspor"
                                    placeholder="Masukkan Nomor Paspor" value="{{ old('no_paspor') }}">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="foto_KTP" class="form-label">Scan KTP</label><br>
                                <small>*dalam bentuk JPG/JPEG max. 1 MB</small>
                                <div class="file-drop-area">
                                    <input type="file" class="file-input @error('foto_KTP') is-invalid @enderror"
                                        accept=".jfif,.jpg,.jpeg,.png,.gif" style="font-size: small; ;margin-top:-25px;"
                                        id="image" name="foto_KTP" required>
                                </div>
                                @error('foto_KTP')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                                <img id="preview-image-before-upload" alt="preview image" style="max-height:250px; "
                                    class="mt-2">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="foto_vaksin" class="form-label">Scan Sertifikat Vaksin
                                    Booster</label> <br>
                                <small>*dalam bentuk JPG/JPEG max. 1 MB</small>
                                <div class="file-drop-area">
                                    <input type="file" class="file-input2 @error('foto_vaksin') is-invalid @enderror"
                                        accept=".jfif,.jpg,.jpeg,.png,.gif" style="font-size: small;margin-top:-25px;"
                                        id="image2" name="foto_vaksin" required>
                                </div>
                                @error('foto_vaksin')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                                <img id="preview-image-before-upload2" alt="preview image" style="max-height:250px; "
                                    class="mt-2">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <h4>Data Alamat</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 form-group clearfix">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <select class="form-control" aria-label="Default select example" name="provinsi"
                                    id="provinsi" style="font-size: 14px;" required>
                                    <option selected style="font-size: 14px;"disabled>Pilih Provinsi
                                    </option>
                                    @foreach ($provinsi as $provinsi)
                                        <option value="{{ $provinsi->id }}">{{ $provinsi->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6 form-group clearfix">
                                <label for="kabupaten" class="form-label">Kabupaten</label>
                                <select class="form-control" aria-label="Default select example" name="kabupaten"
                                    id="kabupaten" style="font-size: 14px;" required>
                                    <option selected style="font-size: 14px;" disabled>Pilih Kabupaten
                                    </option>
                                    {{-- @foreach ($kabupaten as $kabupaten)
                                        <option value="{{ $kabupaten->id }}">{{ $kabupaten->name }}
                                        </option>
                                    @endforeach --}}
                                </select>
                            </div>
                            <div class="col-lg-12 col-12 form-group">
                                <label for="alamat" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat lengkap dengan kode pos"
                                    required>{{ old('alamat') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Produk dan Pembayaran</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label for="produk" class="form-label">Pilih Produk</label>
                                <select class="form-control" aria-label="Default select example" name="produk"
                                    id="produk" style="font-size: 14px;">
                                    <option selected style="font-size: 14px;" disabled>Pilih Jenis
                                        produk</option>

                                    @foreach ($produk as $produk)
                                        <option value="{{ $produk->slug }}">
                                            {{ $produk->nama }} | {{ $produk->harga }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="Mitra" class="form-label">Pilih Mitra</label>
                                <select class="form-control" aria-label="Default select example" name="Mitra"
                                    id="Mitra" style="font-size: 14px;">
                                    <option selected style="font-size: 14px;" disabled>Pilih
                                        Mitra</option>

                                    @foreach ($Mitra as $Mitra)
                                        <option value="{{ $Mitra->id }}">
                                            {{ $Mitra->nama }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="pembiayaan" class="form-label">Jenis
                                    Pembiayaan</label>
                                <select class="form-control" aria-label="Default select example" name="pembiayaan"
                                    id="pembiayaan" style="font-size: 14px;">
                                    <option selected style="font-size: 14px;" disabled>Pilih Jenis
                                        Pembiayaan</option>
                                    <option value="Cash" value="{{ old('pembiayaan') == 'Cash' ? 'selected' : '' }}">
                                        Cash
                                    </option>
                                    <option value="Pembiayaan"
                                        value="{{ old('pembiayaan') == 'Pembiayaan' ? 'selected' : '' }}">
                                        Pembiayaan</option>
                                </select>
                            </div>
                            <br>
                            <div class="col-lg-6 form-group">
                                <label for="setoran_awal" class="form-label">Setoran Awal</label>
                                <input type="number" class="form-control  @error('setoran_awal') is-invalid @enderror"
                                    name="setoran_awal" id="setoran_awal" placeholder="Masukkan jumlah setoran pertama"
                                    value="{{ old('setoran_awal') }}" required>
                                @error('setoran_awal')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <button class="btn btn-success" type="submit">Simpan</button>
                    <button class="btn btn-danger">Batal</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
        $(function() {

            $('#provinsi').on('change', function() {
                let id_provinsi = $('#provinsi').val();
                console.log(id_provinsi);
                $.ajax({
                    url: "{{ route('postkabupaten') }}",
                    type: 'POST',
                    data: {
                        "id_prov": id_provinsi
                    },
                    cache: false,

                    success: function(data) {
                        console.log(data);
                        // console.log(data);
                        $('#kabupaten').html(data);
                    },
                    error: function(data) {
                        console.log('error:', data);
                    }
                })
            })
        })
    </script>
@endsection
