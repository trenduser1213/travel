@extends('admin.baseAdmin')

@section('title')
    Galeri Admin
@endsection

@section('body')
    <H1>Tambah Video</H1>
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Data Video</h4>
                <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#ModalVideo">
                    <i class="fa fa-plus"></i>
                    Tambah Video
                </button>
            </div>
        </div>
        <div class="card-body">
            <!-- Modal -->
            <div class="modal fade" id="ModalVideo" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="" method="post">
                            @csrf
                            @method('post')
                            <div class="modal-header border-0">
                                <h5 class="modal-title">
                                    Tambah Video
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="judul" class="col-md-4 col-md-offset-1 control-label">Judul
                                        Video</label>
                                    <div class="col-md-8">
                                        <input type="text" name="judul" id="judul" class="form-control" required
                                            autofocus>
                                        <span class="help-block with-errors"></span>
                                        @error('judul')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto" class="col-md-4 col-md-offset-1 control-label">Video</label>
                                    <div class="col-md-8">
                                        <input type="text" name="iframe" id="iframe" class="form-control" required
                                            autofocus>
                                        <span class="help-block with-errors"></span>
                                        @error('foto')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="judul" class="col-md-4 col-md-offset-1 control-label">Tampilkan
                                        di Beranda?</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="is_beranda" id="is_beranda">
                                            <option value="-" disabled selected>Pilih</option>
                                            <option value="ya">Ya</option>
                                            <option value="tidak">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="judul" class="col-md-4 col-md-offset-1 control-label">Tampilkan
                                        di Galeri?</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="is_galeri" id="is_galeri">
                                            <option value="-" disabled selected>Pilih</option>
                                            <option value="ya">Ya</option>
                                            <option value="tidak">Tidak</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer border-0">
                                <button type="submit" id="addRowButton" class="btn btn-primary">Tambah</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
