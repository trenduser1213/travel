@extends('mitra.baseMitra')

@section('title')
    Dashboard Mitra
@endsection

@section('body')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-3 pb-4">
        <div>
            <h1 class="pb-2 fw-bold">Dashboard Mitra</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="fas fa-user-plus text-info"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Jama'ah Baru</p>
                                <h4 class="card-title">150</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="fas fa-user-clock text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Peminat Baru</p>
                                <h4 class="card-title">150</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="fas fa-users text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Jumlah Jama'ah</p>
                                <h4 class="card-title">23</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="fas fa-user-check text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category">Jumlah Peminat</p>
                                <h4 class="card-title">23</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Jamaah</h4>
                        <a href="/{{ $mitra->username }}/mitraDashboard/create" style="margin-left:auto"><button
                                class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>Tambah Jamaah
                            </button></a>

                    </div>
                </div>
                <div class="card-body">
                    <div class="box-body table-responsive">
                        <table id="tableFoto" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No. HP/WA</th>
                                    <th>Provinsi</th>
                                    <th>Kabupaten/Kota</th>
                                    <th width="5%">Mitra / Marketing</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody><?php $n = 1; ?>
                                @foreach ($Jamaah as $Jamaah)
                                    <tr>
                                        <td>{{ $n++ }}</td>
                                        <td>{{ $Jamaah->nama }}</td>
                                        <td>{{ $Jamaah->jeniskelamin }}</td>
                                        <td>{{ $Jamaah->HP }}</td>
                                        <td>{{ $Jamaah->nama_provinsi }}</td>
                                        <td>{{ $Jamaah->nama_kabupaten }}</td>
                                        <td>
                                            {{ $Jamaah->nama_mitra }}
                                        </td>
                                        <td>
                                            @if ($Jamaah->status === 'diterima')
                                                <button class="btn btn-sm btn-primary btn-round" disabled>Diterima</button>
                                            @elseif ($Jamaah->status === 'dikonfirmasi')
                                                <button class="btn btn-sm btn-warning btn-round"
                                                    disabled>Dikonfirmasi</button>
                                            @elseif ($Jamaah->status === 'selesai')
                                                <button class="btn btn-sm btn-success btn-round" disabled>Selesai</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Data Peminat</h2>
                </div>
                <div class="card-body">

                    <div class="box-body table-responsive">
                        <table id="tableFoto" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Nama</th>
                                    <th>No. HP/WA</th>
                                    <th>Email</th>
                                    <th width="5%">Mitra / Marketing</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody><?php $n = 1; ?>
                                @foreach ($Peminat as $Peminat)
                                    <tr>
                                        <td>{{ $n++ }}</td>
                                        <td>{{ $Peminat->nama }}</td>
                                        <td><a href="https://api.whatsapp.com/send/?phone={{ $Peminat->nomor_hp }}&text=Assalamu'alaikum {{ $Peminat->nama }}, kami dari Safari Umrah dan Haji apakah anda berminat dengan paket umroh/haji yang kami miliki? &app_absent=0"
                                                target="_blank">{{ $Peminat->nomor_hp }}</a></td>
                                        <td>{{ $Peminat->email }}</td>
                                        <td>
                                            {{ $Peminat->nama_mitra }}
                                        </td>
                                        <td>
                                            @if ($Peminat->status === 'diterima')
                                                <button class="btn btn-sm btn-primary btn-round" disabled>Diterima</button>
                                            @elseif ($Peminat->status === 'dihubungi')
                                                <button class="btn btn-sm btn-warning btn-round" disabled>Dihubungi</button>
                                            @elseif ($Peminat->status === 'selesai')
                                                <button class="btn btn-sm btn-success btn-round" disabled>Selesai</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
