@extends('admin.baseAdmin')
@section('title')
    Edit Mitra/Marketing
@endsection
@section('body')
    <div class="page-header">
        <h1 class="page-title">Edit Mitra/Marketing</h1>
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
                                        placeholder="Masukkan Nama Produk" value="{{ $MitraMarketing->nama }}" required>
                                    @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="slug">Nomor HP</label>
                                    <input type="tel" class="form-control" id="hp" name="hp"
                                        placeholder="Masukkan Nomor HP" value="{{ $MitraMarketing->hp }}" required>
                                    @error('hp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="wa">Nomor WhatsApp</label>
                                    <input type="tel" class="form-control" id="wa" name="wa"
                                        placeholder="Masukkan Nomor WhatsApp" value="{{ $MitraMarketing->wa }}" required>
                                    @error('wa')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="old">Foto Sekarang</label> <br>
                                            <img src="{{ '/assets' }}../../../{{ $MitraMarketing->foto }}"
                                                alt="{{ $MitraMarketing->nama }}"
                                                style="max-width: 100%; border :1px black">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="foto">Ganti Foto</label>
                                            <input type="file"
                                                class="form-control file-input @error('foto') is-invalid @enderror"
                                                accept=".jfif,.jpg,.jpeg,.png,.gif" id="image" name="foto">
                                            <img id="preview-image-before-upload" alt="preview image"
                                                style="max-width:100%; margin-top:10px"> <br>
                                            <small class="text-danger"><i class="fa fa-info-circle"></i> Masukkan foto
                                                dengan
                                                ketentuan :
                                                <ul>
                                                    <li>ukuran maksimal 1 MB</li>
                                                    <li>Resolusi 500x500 px (1:1) </li>
                                                </ul>
                                            </small>
                                            @error('foto')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <select name="provinsi" id="provinsi" class="form-control" required>
                                        <option value="-" selected disabled>Pilih Provinsi</option>
                                        @foreach ($provinsi as $provinsi)
                                            @if ($MitraMarketing->provinsi === $provinsi->id)
                                                <option value="{{ $provinsi->id }}" selected>{{ $provinsi->name }}
                                                </option>
                                            @else
                                                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten">Kabupaten</label>
                                    <select name="kabupaten" id="kabupaten" class="form-control" required>
                                        <option value="-" selected disabled>Pilih Kabupaten</option>
                                        @foreach ($kabupaten as $kabupaten)
                                            @if ($MitraMarketing->kabupaten === $kabupaten->id)
                                                <option value="{{ $kabupaten->id }}" selected>{{ $kabupaten->name }}
                                                </option>
                                            @else
                                                <option value="{{ $kabupaten->id }}">{{ $kabupaten->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat"> Alamat</label>
                                    <textarea name="alamat" id="alamat" rows="3" class="form-control" placeholder="Masukkan Alamat Lengkap">{{ $MitraMarketing->alamat }}</textarea>

                                    @error('alamat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select name="jabatan" id="jabatan" class="form-control" required>

                                        <option value="-" selected disabled>Pilih Jabatan</option>
                                        @if ($MitraMarketing->jabatan === 'Mitra')
                                            <option value="Mitra" selected>Mitra</option>
                                            <option value="Marketing">Marketing</option>
                                        @else
                                            <option value="Mitra">Mitra</option>
                                            <option value="Marketing" selected>Marketing</option>
                                        @endif

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
@endsection
