@extends('admin.baseAdmin')
@section('body')
    <div class="page-header">
        <h4 class="page-title">Edit Identitas Perusahaan</h4>
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
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><strong> Informasi Umum </strong></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="/adminIdentitasPerusahaan" method="post">
                                @method('post')
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        placeholder="Masukkan Nama Perusahaan" value="{{ $data->nama }}">
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="GMaps" rows="3" name="alamat" placeholder="Masukkan Alamat Perusahaan">  {{ $data->alamat }} </textarea>
                                </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gedung">Nama Gedung Kantor</label>
                                <input type="text" class="form-control" id="gedung"
                                    placeholder="Masukkan Nama Gedung Kantor" value="{{ $data->nama_gedung_kantor }}"
                                    name="nama_gedung_kantor">
                            </div>
                            <div class="form-group">
                                <label for="GMaps">Link Google Maps</label>
                                <textarea class="form-control" id="gmaps" rows="3" name="gmaps"> {{ $data->gmaps }} </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title"><strong> Kontak </strong></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="HP1">Nomor Handphone 1</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa fa-phone-square"></i></span>
                                    </div>
                                    @if ($data->no_hp_1 != null)
                                        <input type="text" class="form-control" placeholder="Masukkan No. HP 1"
                                            aria-label="HP1" aria-describedby="basic-addon1" name="no_hp_1"
                                            value="{{ $data->no_hp_1 }}">
                                    @else
                                        <input type="text" class="form-control" placeholder="Masukkan No. HP 1"
                                            aria-label="HP1" aria-describedby="basic-addon1" name="no_hp_1">
                                    @endif

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="HP2">Nomor Handphone 2</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa fa-phone-square"></i></span>
                                    </div>
                                    @if ($data->no_hp_2 != null)
                                        <input type="text" name="no_hp_2" class="form-control"
                                            placeholder="Masukkan No. HP 2" aria-label="HP2" aria-describedby="basic-addon1"
                                            value="{{ $data->no_hp_2 }}">
                                    @else
                                        <input type="text" name="no_hp_2" class="form-control"
                                            placeholder="Masukkan No. HP 2" aria-label="HP2"
                                            aria-describedby="basic-addon1">
                                    @endif
                                </div>
                                <small>Silahkan isi apabila ada No. HP ke-dua</small>
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat E-mail</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Masukkan email"
                                        aria-label="email" aria-describedby="basic-addon1" name="email"
                                        value="{{ $data->email }}">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="HP1">Nomor Telepon 1</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa fa-phone"></i></span>
                                    </div>
                                    @if ($data->no_telepon_1 != null)
                                        <input type="text" class="form-control" placeholder="Masukkan No. Telepon 1"
                                            aria-label="Tel1" aria-describedby="basic-addon1"
                                            value="{{ $data->no_telepon_1 }}" name="no_telepon_1">
                                    @else
                                        <input type="text" class="form-control" placeholder="Masukkan No. Telepon 1"
                                            aria-label="Tel1" aria-describedby="basic-addon1" name="no_telepon_1">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="HP1">Nomor Telepon 2</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa fa-phone"></i></span>
                                    </div>
                                    @if ($data->no_telepon_2 != null)
                                        <input type="text" class="form-control" placeholder="Masukkan No. Telepon 2"
                                            aria-label="Tel2" aria-describedby="basic-addon2"
                                            value="{{ $data->no_telepon_2 }}" name="no_telepon_2">
                                    @else
                                        <input type="text" class="form-control" placeholder="Masukkan No. Telepon 2"
                                            aria-label="Tel2" aria-describedby="basic-addon2" name="no_telepon_2">
                                    @endif
                                </div>
                                <small>Silahkan isi apabila ada No. Telepon ke-dua</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title"><strong> Pembayaran </strong></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama_pada_rekening">Nama Pada Rekening</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Pada Rekening"
                                        aria-label="nama_pada_rekening" aria-describedby="basic-addon1"
                                        name="nama_pada_rekening" value="{{ $data->nama_pada_rekening }}">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="norek1">Informasi Rekening 1</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa fa-book"></i></span>
                                    </div>
                                    <textarea name="norek1" id="norek1" rows="3" class="form-control">{{ $data->no_rekening_1 }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="norek2">Informasi Rekening 2</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa fa-book"></i></span>
                                    </div>
                                    <textarea name="norek2" id="norek2" rows="3" class="form-control">{{ $data->no_rekening_2 }}</textarea>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="norek3">Informasi Rekening 3</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa fa-book"></i></span>
                                    </div>
                                    <textarea name="norek3" id="norek3" rows="3" class="form-control">{{ $data->no_rekening_3 }}</textarea>

                                </div>
                                <small>Silahkan isi apabila ada rekening ke-tiga</small>
                            </div>
                            <div class="form-group">
                                <label for="norek4">Informasi Rekening 4</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa fa-book"></i></span>
                                    </div>
                                    <textarea name="norek4" id="norek4" rows="3" class="form-control">{{ $data->no_rekening_4 }}</textarea>

                                </div>
                                <small>Silahkan isi apabila ada rekening ke-empat</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title"><strong> Media Sosial </strong></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fb">Facebook</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><strong>f</strong></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Masukkan link facebook"
                                        aria-label="fb" aria-describedby="basic-addon1" name="fb"
                                        value="{{ $data->facebook }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ig">Instagram</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa fa-camera"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Masukkan link instagram"
                                        aria-label="ig" aria-describedby="basic-addon1" name="ig"
                                        value="{{ $data->instagram }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="yt">Youtube</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fa fa-play"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Masukkan link youtube"
                                        aria-label="yt" aria-describedby="basic-addon1" name="yt"
                                        value="{{ $data->youtube }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-action">
                <button class="btn btn-success" type="submit">Submit</button>
                <button class="btn btn-danger">Cancel</button>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
