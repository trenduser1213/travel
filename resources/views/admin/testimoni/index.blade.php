@extends('admin.baseAdmin')

@section('title')
    Admin Testimoni
@endsection

@section('body')
    <H1>Admin Testimoni</H1>
    <div class="col-md-6">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                Data telah di tambahkan
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Testimoni</h4>
                        <a href="{{ route('adminTestimoni.create') }}" style="margin-left:auto"><button
                                class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>Tambah Testimoni
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
                                    <th>Jabatan</th>
                                    <th>Foto</th>
                                    <th width="400%">Testimoni</th>
                                    <th width="5%">Tampil di Beranda</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody><?php $n = 1; ?>
                                @foreach ($testimoni as $testimoni)
                                    <tr>
                                        <td>{{ $n++ }}</td>
                                        <td>{{ $testimoni->nama }}</td>
                                        <td>{{ $testimoni->jabatan }}</td>
                                        <td><img src="{{ $testimoni->gambar }}" alt="{{ $testimoni->nama }}"
                                                style="max-height: 125px"></td>
                                        <td>
                                            <p class="mt-2 mb-2">{{ $testimoni->testimoni }}</p>
                                        </td>
                                        <td>
                                            @if ($testimoni->is_tampil != 'ya')
                                                <center><i class="fa fa-times" style="color: brown"></i></center>
                                            @else
                                                <center><i class="fa fa-check" style="color: green"></i></center>
                                            @endif
                                        </td>

                                        <td> <button class="btn btn-info btn-sm" style="margin: 5px" data-toggle="modal"
                                                data-target="#ModalTestiDetail-{{ $testimoni->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-info" style="font-size:10px "></i>
                                                </span>
                                                Detail
                                            </button>
                                            <a href="{{ route('adminTestimoni.edit', $testimoni->id) }}"><button
                                                    class="btn btn-success btn-sm" style="margin: 5px">
                                                    <span class="btn-label">
                                                        <i class="fa fa-edit" style="font-size:10px"></i>
                                                    </span>
                                                    Edit
                                                </button></a>
                                            <button class="btn btn-danger btn-sm" style="margin: 5px" data-toggle="modal"
                                                data-target="#ModalFotoHapus-{{ $testimoni->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-trash" style="font-size:10px"></i>
                                                </span>
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                    {{-- Modal Produk Detail --}}
                                    <div class="modal fade" id="ModalTestiDetail-{{ $testimoni->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 120%">

                                                <div class="modal-header border-0">
                                                    <h5 class="modal-title">
                                                        Detail Testimoni
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <div class="form-group">
                                                        <label for="Nama" class="col-md-4">Nama
                                                            Pemberi Testimoni</label>
                                                        <div class="col-md-8">
                                                            <span>{{ $testimoni->nama }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Jabatan" class="col-md-4">Jabatan
                                                            Pemberi Testimoni</label>
                                                        <div class="col-md-8">
                                                            <span>{{ $testimoni->jabatan }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Testi" class="col-md-4">
                                                            Pesan Testimoni</label>
                                                        <div class="col-md-12">
                                                            <span>{{ $testimoni->testimoni }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Testi" class="col-md-4">
                                                            Tampil di beranda</label>
                                                        <div class="col-md-12">
                                                            <span>{{ $testimoni->is_tampil }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" style="">
                                                        <label for="foto" class="col-md-4">Foto</label> <br>
                                                        <center>

                                                            <img src="{{ $testimoni->gambar }}"
                                                                alt="{{ $testimoni->nama }}" style="max-width:50%">
                                                        </center>
                                                    </div>

                                                </div>


                                                <div class="modal-footer border-0">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Tutup</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Hapus-->
                                    <div class="modal fade" id="ModalFotoHapus-{{ $testimoni->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header border-0">
                                                    <h5 class="modal-title">
                                                        Anda Yakin ingin menghapus Testimoni {{ $testimoni->nama }}?
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
                                                        onclick="hapusData('{{ route('adminGaleriFoto.destroy', $testimoni->id) }}')"
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
    </script>
@endsection
