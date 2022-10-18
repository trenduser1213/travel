@extends('admin.baseAdmin')

@section('title')
    Galeri Admin
@endsection

@section('body')
    <H1>Admin Galeri</H1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Foto</h4>
                        <a href="{{ route('adminGaleriFoto.create') }}"><button class="btn btn-primary btn-round float-right"
                                style="float: right;">
                                <i class="fa fa-plus"></i>
                                Tambah Foto
                            </button></a>

                    </div>
                </div>
                <div class="card-body">
                    <!-- Modal -->
                    <div class="modal fade" id="ModalFoto" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="" method="post">
                                    @csrf
                                    @method('post')
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title">
                                            Tambah Foto
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label for="judul" class="col-md-2 col-md-offset-1 control-label">Judul
                                                Foto</label>
                                            <div class="col-md-8">
                                                <input type="text" name="judul" id="judul" class="form-control"
                                                    required autofocus>
                                                <span class="help-block with-errors"></span>
                                                @error('judul')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="foto"
                                                class="col-md-2 col-md-offset-1 control-label">Foto</label>
                                            <div class="col-md-8">
                                                <input type="text" name="slug" id="slug" class="form-control"
                                                    required autofocus>
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

                    <div class="box-body table-responsive">
                        <table id="tableFoto" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">no</th>
                                    <th>Judul</th>
                                    <th>Foto</th>
                                    <th width="10%">Tampil di Beranda</th>
                                    <th width="10%">Tampil di Galeri</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody><?php $n = 1; ?>
                                @foreach ($foto as $foto)
                                    <tr>
                                        <td>{{ $n++ }}</td>
                                        <td>{{ $foto->judul }}</td>
                                        <td><img src="{{ $foto->link }}" alt="{{ $foto->judul }}"
                                                style="max-height: 125px"></td>
                                        <td>
                                            @if ($foto->is_tampil_di_beranda != 'ya')
                                                <center><i class="fa fa-times" style="color: brown"></i></center>
                                            @else
                                                <center><i class="fa fa-check" style="color: green"></i></center>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($foto->is_tampil_di_galeri != 'ya')
                                                <center><i class="fa fa-times" style="color: brown"></i></center>
                                            @else
                                                <center><i class="fa fa-check" style="color: green"></i></center>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('adminGaleriFoto.edit', $foto->id) }}"><button
                                                    class="btn btn-success btn-sm" style="margin: 5px">
                                                    <span class="btn-label">
                                                        <i class="fa fa-edit" style="font-size:10px"></i>
                                                    </span>
                                                    Edit
                                                </button></a>
                                            <button class="btn btn-danger btn-sm" style="margin: 5px" data-toggle="modal"
                                                data-target="#ModalFotoHapus-{{ $foto->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-trash" style="font-size:10px"></i>
                                                </span>
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal Hapus-->
                                    <div class="modal fade" id="ModalFotoHapus-{{ $foto->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header border-0">
                                                    <h5 class="modal-title">
                                                        Anda Yakin ingin menghapus Foto {{ $foto->judul }}?
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                </div>
                                                <div class="modal-footer border-0">
                                                    <button
                                                        onclick="hapusData('{{ route('adminGaleriFoto.destroy', $foto->id) }}')"
                                                        type="" id="addRowButton"
                                                        class="btn btn-primary">Hapus</button>
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Tutup</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Video</h4>
                        {{-- <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#ModalVideo">
                            <i class="fa fa-plus"></i>
                            Tambah Video
                        </button> --}}
                        <a href="{{ route('adminGaleriVideo.create') }}"><button
                                class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>
                                Tambah Video
                            </button></a>

                    </div>
                </div>
                <div class="card-body">
                    <div class="box-body table-responsive">
                        <table id="tableVideo" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">no</th>
                                    <th>Judul</th>
                                    <th>Video</th>
                                    <th width="10%">Tampil di Beranda</th>
                                    <th width="10%">Tampil di Galeri</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody><?php $n = 1; ?>
                                @foreach ($video as $video)
                                    <tr>
                                        <td>{{ $n++ }}</td>
                                        <td>{{ $video->judul }}</td>
                                        <td>
                                            <div class="mb-1 mt-2">
                                                {!! $video->link !!}
                                            </div>
                                        </td>

                                        <td>
                                            @if ($video->is_tampil_di_beranda != 'ya')
                                                <center><i class="fa fa-times" style="color: brown"></i></center>
                                            @else
                                                <center><i class="fa fa-check" style="color: green"></i></center>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($video->is_tampil_di_galeri != 'ya')
                                                <center><i class="fa fa-times" style="color: brown"></i></center>
                                            @else
                                                <center><i class="fa fa-check" style="color: green"></i></center>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('adminGaleriVideo.edit', $video->id) }}"><button
                                                    class="btn btn-success btn-sm" style="margin: 5px">
                                                    <span class="btn-label">
                                                        <i class="fa fa-edit" style="font-size:10px"></i>
                                                    </span>
                                                    Edit
                                                </button></a>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#ModalVideoHapus-{{ $video->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-trash" style="font-size:10px"></i>
                                                </span>
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="ModalVideoHapus-{{ $video->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header border-0">
                                                    <h5 class="modal-title">
                                                        Anda Yakin ingin menghapus video {{ $video->judul }}?
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                </div>
                                                <div class="modal-footer border-0">
                                                    <button
                                                        onclick="hapusData('{{ route('adminGaleriVideo.destroy', $video->id) }}')"
                                                        type="" id="addRowButton"
                                                        class="btn btn-primary">Hapus</button>
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Tutup</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
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
    <script>
        let table;

        $(function() {
            table = $('#tableFoto').DataTable({
                paging: true,
                lengthChange: true,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                // 
            });
        });

        $(function() {
            table = $('#tableVideo').DataTable({
                paging: true,
                lengthChange: true,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                // 
            });
        });
    </script>
@endsection
