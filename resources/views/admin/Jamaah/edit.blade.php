@extends('admin.baseAdmin')

@section('title')
    Edit Jama'ah
@endsection

@section('body')
    <div class="page-header">
        <h4 class="page-title">Edit Jama'ah</h4>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('adminJamaah.update', $Jamaah->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                                    placeholder="Masukkan nama anda" value="{{ $Jamaah->nama }}" required>
                            </div>
                            <div class="col-lg-6 form-group clearfix">
                                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-control" aria-label="Default select example" name="jeniskelamin"
                                    id="jeniskelamin" style="font-size: 14px;" required>
                                    <option disabled style="font-size: 14px;">Pilih Jenis Kelamin
                                    </option>
                                    @if ($Jamaah->jeniskelamin === 'laki laki')
                                        <option value="laki-laki" selected>
                                            Laki-laki
                                            / Male</option>
                                        <option value="perempuan">
                                            Perempuan
                                            / Female</option>
                                    @else
                                        <option value="laki-laki">
                                            Laki-laki
                                            / Male</option>
                                        <option value="perempuan" selected>
                                            Perempuan
                                            / Female</option>
                                    @endif

                                </select>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="HP" class="form-label">No. HP</label>
                                <input type="tel" name="HP" id="HP"
                                    class="form-control @error('HP') is-invalid @enderror"
                                    placeholder="Masukkan nomor HP/WA" value="{{ $Jamaah->HP }}" required>
                                @error('HP')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="Masukkan alamat E-mail"
                                    value="{{ $Jamaah->email }}" required>
                                @error('email')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="NIK" class="form-label">NIK (Nomor Induk
                                    Kependudukan)</label>

                                <input type="number" class="form-control @error('NIK') is-invalid @enderror" name="NIK"
                                    id="NIK" placeholder="Masukkan NIK sesuai KTP" value="{{ $Jamaah->NIK }}"
                                    required>
                                @error('NIK')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="no_paspor" class="form-label">Nomor Paspor</label>
                                <input type="text" class="form-control" name="no_paspor" id="no_paspor"
                                    placeholder="Masukkan Nomor Paspor" value="{{ $Jamaah->no_paspor }}">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="old">Foto KTP Sekarang</label> <br>
                                <img src="{{ '/assets' }}../../../{{ $Jamaah->foto_KTP }}" alt="{{ $Jamaah->nama }}"
                                    style="max-width: 70%; border :1px black">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="old">Foto Vaksin Sekarang</label> <br>
                                <img src="{{ '/assets' }}../../../{{ $Jamaah->foto_vaksin }}"
                                    alt="{{ $Jamaah->nama }}" style="max-width: 70%; border :1px black">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="foto_KTP" class="form-label">Scan KTP Baru</label><br>
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
                                    Booster Baru</label> <br>
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
                                    <option style="font-size: 14px;"disabled>Pilih Provinsi
                                    </option>
                                    @foreach ($provinsi as $provinsi)
                                        @if ($Jamaah->provinsi === $provinsi->id)
                                            <option value="{{ $provinsi->id }}" selected>{{ $provinsi->name }}
                                            </option>
                                        @else
                                            <option value="{{ $provinsi->id }}">{{ $provinsi->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6 form-group clearfix">
                                <label for="kabupaten" class="form-label">Kabupaten</label>
                                <select class="form-control" aria-label="Default select example" name="kabupaten"
                                    id="kabupaten" style="font-size: 14px;" required>
                                    {{-- <option style="font-size: 14px;" disabled>Pilih Kabupaten
                                    </option> --}}
                                    {{-- <option value="{{ $kabupaten->id }}" disabled>{{ $kabupaten->name }}
                                    </option> --}}
                                    @foreach ($kabupaten as $kabupaten)
                                        @if ($Jamaah->kabupaten === $kabupaten->id)
                                            <option value="{{ $kabupaten->id }}" disabled>{{ $kabupaten->name }}
                                            </option>
                                        @else
                                            <option value="{{ $kabupaten->id }}" hidden>{{ $kabupaten->name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-12 col-12 form-group">
                                <label for="alamat" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat lengkap dengan kode pos"
                                    required>{{ $Jamaah->alamat }}</textarea>
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
                                <label for="slug_produk" class="form-label">Pilih Produk</label>
                                <select class="form-control" aria-label="Default select example" name="slug_produk"
                                    id="slug_produk" style="font-size: 14px;">
                                    <option style="font-size: 14px;" disabled>Pilih Jenis
                                        produk</option>

                                    @foreach ($produk as $produk)
                                        @if ($Jamaah->produk === $produk->slug)
                                            <option value="{{ $produk->slug }}" selected>
                                                {{ $produk->nama }} | {{ $produk->harga }}</option>
                                        @else
                                            <option value="{{ $produk->slug }}">
                                                {{ $produk->nama }} | {{ $produk->harga }}</option>
                                        @endif
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
                                        @if ($Jamaah->mitra_marketing === $Mitra->username)
                                            <option value="{{ $Mitra->id }}" selected>
                                                {{ $Mitra->nama }}</option>
                                        @else
                                            <option value="{{ $Mitra->id }}">
                                                {{ $Mitra->nama }}</option>
                                        @endif
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="pembiayaan" class="form-label">Jenis
                                    Pembiayaan</label>
                                <select class="form-control" aria-label="Default select example" name="pembiayaan"
                                    id="pembiayaan" style="font-size: 14px;">
                                    <option style="font-size: 14px;" disabled>Pilih Jenis
                                        Pembiayaan</option>
                                    @if ($Jamaah->pembiayaan === 'Cash')
                                        <option value="Cash" selected>
                                            Cash
                                        </option>
                                        <option value="Pembiayaan">
                                            Pembiayaan</option>
                                    @else
                                        <option value="Cash">
                                            Cash
                                        </option>
                                        <option value="Pembiayaan" selected>
                                            Pembiayaan</option>
                                    @endif
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
        $(function () {
            $.ajaxSetup({
                headers : {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')}
            });
        });
        $(function(){
            
            $('#provinsi').on('change',function(){
                let id_provinsi = $('#provinsi').val();
                console.log(id_provinsi);
                $.ajax({
                    url : "{{route('kabupaten')}}",
                    type : 'POST',
                    data : {"id_prov" : id_provinsi},
                    cache : false,

                    success: function(data ){
                        console.log(data);
                        // console.log(data);
                        $('#kabupaten').html(data); 
                    },
                    error: function(data){
                        console.log('error:',data);
                    }
                })
            })
        })
    </script>

@endsection
