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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Mitra Teratas</div>
                </div>
                <div class="card-body pb-0">
                    <div class="d-flex">
                        <div class="avatar">
                            <img src="../assets/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="flex-1 pt-1 ml-2">
                            <h6 class="fw-bold mb-1">CSS</h6>
                            <small class="text-muted">Cascading Style Sheets</small>
                        </div>
                        <div class="d-flex ml-auto align-items-center">
                            <h3 class="text-info fw-bold">+$17</h3>
                        </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                        <div class="avatar">
                            <img src="../assets/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="flex-1 pt-1 ml-2">
                            <h6 class="fw-bold mb-1">J.CO Donuts</h6>
                            <small class="text-muted">The Best Donuts</small>
                        </div>
                        <div class="d-flex ml-auto align-items-center">
                            <h3 class="text-info fw-bold">+$300</h3>
                        </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                        <div class="avatar">
                            <img src="../assets/img/logoproduct3.svg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="flex-1 pt-1 ml-2">
                            <h6 class="fw-bold mb-1">Ready Pro</h6>
                            <small class="text-muted">Bootstrap 4 Admin Dashboard</small>
                        </div>
                        <div class="d-flex ml-auto align-items-center">
                            <h3 class="text-info fw-bold">+$350</h3>
                        </div>
                    </div>
                    <div class="separator-dashed"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Provinsi Teratas</div>
                </div>
                <div class="card-body pb-0">
                    <div class="d-flex">
                        <div class="avatar">
                            <img src="../assets/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="flex-1 pt-1 ml-2">
                            <h6 class="fw-bold mb-1">CSS</h6>
                            <small class="text-muted">Cascading Style Sheets</small>
                        </div>
                        <div class="d-flex ml-auto align-items-center">
                            <h3 class="text-info fw-bold">+$17</h3>
                        </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                        <div class="avatar">
                            <img src="../assets/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="flex-1 pt-1 ml-2">
                            <h6 class="fw-bold mb-1">J.CO Donuts</h6>
                            <small class="text-muted">The Best Donuts</small>
                        </div>
                        <div class="d-flex ml-auto align-items-center">
                            <h3 class="text-info fw-bold">+$300</h3>
                        </div>
                    </div>
                    <div class="separator-dashed"></div>
                    <div class="d-flex">
                        <div class="avatar">
                            <img src="../assets/img/logoproduct3.svg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="flex-1 pt-1 ml-2">
                            <h6 class="fw-bold mb-1">Ready Pro</h6>
                            <small class="text-muted">Bootstrap 4 Admin Dashboard</small>
                        </div>
                        <div class="d-flex ml-auto align-items-center">
                            <h3 class="text-info fw-bold">+$350</h3>
                        </div>
                    </div>
                    <div class="separator-dashed"></div>

                </div>
            </div>
        </div>
    </div>
@endsection
