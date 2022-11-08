@extends('admin.baseAdmin')
@section('title')
    Tambah Mitra/Marketing
@endsection
@section('body')
    <div class="page-header">
        <h1 class="page-title">Tambah Mitra/Marketing</h1>
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
            <form action="{{ route('adminMitraMarketing.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                {{ csrf_field() }}
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan Nama Produk" value="" required>
                                    @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="slug">Nomor HP</label>
                                    <input type="tel" class="form-control" id="hp" name="hp"
                                        placeholder="Masukkan Nomor HP" value="" required>
                                    @error('hp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="wa">Nomor WhatsApp</label>
                                    <input type="tel" class="form-control" id="wa" name="wa" value="62"
                                        placeholder="Masukkan No. Whatsapp di awali dengan 62 (cth : 6281212341234)"required>
                                    @error('wa')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file"
                                        class="form-control file-input @error('foto') is-invalid @enderror"
                                        accept=".jfif,.jpg,.jpeg,.png,.gif" id="image" name="foto">
                                    @error('foto')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <small class="text-danger"><i class="fa fa-info-circle"></i> Masukkan foto dengan
                                    ketentuan :
                                    <ul>
                                        <li>ukuran maksimal 1 MB</li>
                                        <li>Resolusi 500x500 px (1:1) </li>
                                    </ul>
                                </small>
                                <img id="preview-image-before-upload" alt="preview image"
                                    style="max-height:250px; margin-left:30px;">



                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Masukkan email" value="" required>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <select name="provinsi" id="provinsi" class="form-control" required>
                                        <option value="-" selected disabled>Pilih Provinsi</option>
                                        @foreach ($provinsi as $provinsi)
                                            <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten">Kabupaten</label>
                                    <select name="kabupaten" id="kabupaten" class="form-control" required>
                                        <option value="-" selected disabled>Pilih Kabupaten</option>
                                        {{-- @foreach ($kabupaten as $kabupaten)
                                            <option value="{{ $kabupaten->id }}">{{ $kabupaten->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat"> Alamat</label>
                                    <textarea name="alamat" id="alamat" rows="3" class="form-control" placeholder="Masukkan Alamat Lengkap"></textarea>

                                    @error('alamat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select name="jabatan" id="jabatan" class="form-control" required>
                                        <option value="-" selected disabled>Pilih Jabatan</option>
                                        <option value="Mitra">Mitra</option>
                                        <option value="Marketing">Marketing</option>
                                    </select>
                                    @error('jabatan')
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
