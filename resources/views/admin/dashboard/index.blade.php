@extends('admin.baseAdmin')

@section('title')
    Dashboard Admin
@endsection

@section('body')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-3 pb-4">
        <div>
            <h1 class="pb-2 fw-bold">Dashboard Admin</h1>
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
                                <h4 class="card-title">{{ $newJamaah }}</h4>
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
                                <h4 class="card-title">{{ $newPeminat }}</h4>
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
                                <h4 class="card-title">{{ $allJamaah }}</h4>
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
                                <h4 class="card-title">{{ $allPeminat }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Mitra Teratas</div>
                </div>
                <div class="card-body pb-0">
                    @foreach ($mitra as $mitra)
                        <div class="d-flex">
                            <div class="flex-1 pt-1 ml-2">
                                <h6 class="fw-bold mb-1">{{ $mitra->nama_mitra }}</h6>
                            </div>
                            <div class="d-flex ml-auto align-items-center">
                                <h3 class="text-info fw-bold">{{ $mitra->jumlah }}</h3>
                            </div>
                        </div>
                        <div class="separator-dashed"></div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Provinsi Teratas</div>
                </div>
                <div class="card-body pb-0">
                    @foreach ($provinsi as $provinsi)
                        <div class="d-flex">
                            <div class="flex-1 pt-1 ml-2">
                                <h6 class="fw-bold mb-1">{{ $provinsi->nama_provinsi }}</h6>
                            </div>
                            <div class="d-flex ml-auto align-items-center">
                                <h3 class="text-info fw-bold">{{ $provinsi->jumlah }}</h3>
                            </div>
                        </div>
                        <div class="separator-dashed"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
