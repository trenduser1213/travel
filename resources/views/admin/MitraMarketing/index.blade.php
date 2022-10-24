@extends('admin.baseAdmin')

@section('title')
    Admin Mitra/Marketing
@endsection

@section('body')
    <H1>Admin Mitra/Marketing</H1>
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
                        <h4 class="card-title">Data Mitra/Marketing</h4>
                        <a href="{{ route('adminMitraMarketing.create') }}" style="margin-left:auto"><button
                                class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>Tambah Mitra/Marketing
                            </button></a>

                    </div>
                </div>
                <div class="card-body">

                    <div class="box-body table-responsive">
                        <table id="tableFoto" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Kode Mitra</th>
                                    <th>Nama</th>
                                    <th>Kota/Kabupaten</th>
                                    <th>Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody><?php $n = 1; ?>
                                @foreach ($MitraMarketing as $MitraMarketing)
                                    <tr>
                                        <td>{{ $n++ }}</td>
                                        <td>{{ $MitraMarketing->username }}</td>
                                        <td>{{ $MitraMarketing->nama }}</td>
                                        <td>{{ $MitraMarketing->kota }}</td>
                                        <td>{{ $MitraMarketing->jabatan }}</td>
                                        <td>
                                            <button class="btn btn-info btn-sm" style="margin: 5px" data-toggle="modal"
                                                data-target="#ModalProdukDetail-{{ $MitraMarketing->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-info" style="font-size:10px "></i>
                                                </span>
                                                Detail
                                            </button>
                                            <a href="{{ route('adminMitraMarketing.edit', $MitraMarketing->id) }}"><button
                                                    class="btn btn-success btn-sm" style="margin: 5px">
                                                    <span class="btn-label">
                                                        <i class="fa fa-edit" style="font-size:10px"></i>
                                                    </span>
                                                    Edit
                                                </button></a>
                                            <button class="btn btn-danger btn-sm" style="margin: 5px" data-toggle="modal"
                                                data-target="#ModalFotoHapus-{{ $MitraMarketing->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-trash" style="font-size:10px"></i>
                                                </span>
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                    {{-- Modal Produk Detail --}}
                                    <div class="modal fade" id="ModalProdukDetail-{{ $MitraMarketing->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 120%">

                                                <div class="modal-header border-0">
                                                    <h5 class="modal-title">
                                                        Detail Mitra Marketing
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="row">

                                                    <div class="modal-body ml-2">

                                                        <div class="form-group row" style="margin-bottom: -15px">
                                                            <label for="Nama" class="col-md-4">Nama
                                                            </label>
                                                            <div class="col-md-8">
                                                                <span>{{ $MitraMarketing->nama }}</span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row" style="margin-bottom: -15px">
                                                            <label for="Kode" class="col-md-4">Kode
                                                                Mitra/Marketing</label>
                                                            <div class="col-md-8">
                                                                <span>{{ $MitraMarketing->username }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin-bottom: -15px">
                                                            <label for="Harga"
                                                                class="col-md-4 col-md-offset-1 control-label">No. WA
                                                            </label>
                                                            <div class="col-md-8">
                                                                <span>{{ $MitraMarketing->wa }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin-bottom: -15px">
                                                            <label for="Nama" class="col-md-4">No. HP
                                                            </label>
                                                            <div class="col-md-8">
                                                                <span>{{ $MitraMarketing->hp }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin-bottom: -15px">
                                                            <label for="Nama" class="col-md-4">Provinsi
                                                            </label>
                                                            <div class="col-md-8">
                                                                <span>{{ $MitraMarketing->provinsi }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin-bottom: -15px">
                                                            <label for="Nama" class="col-md-4">Kota/Kabupaten
                                                            </label>
                                                            <div class="col-md-8">
                                                                <span>{{ $MitraMarketing->kota }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin-bottom: -15px">
                                                            <label for="Nama" class="col-md-4">Alamat
                                                            </label>
                                                            <div class="col-md-8">
                                                                <span>{{ $MitraMarketing->alamat }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row" style="margin-bottom: -15px">
                                                            <label for="Nama" class="col-md-4">Jabatan
                                                            </label>
                                                            <div class="col-md-8">
                                                                <span>{{ $MitraMarketing->jabatan }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mt-4">
                                                            @if ($MitraMarketing->foto != null)
                                                                <center><img src="{{ $MitraMarketing->foto }}"
                                                                        alt="{{ $MitraMarketing->nama }}"
                                                                        style="max-width:30%" class="rounded-circle">
                                                                </center>
                                                            @else
                                                                <center><img src="assets/images/logo-safari.png"
                                                                        alt="{{ $MitraMarketing->nama }}"
                                                                        style="max-width:30%" class="rounded">
                                                                </center>
                                                            @endif

                                                        </div>
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
                                    <div class="modal fade" id="ModalFotoHapus-{{ $MitraMarketing->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header border-0">
                                                    <h5 class="modal-title">
                                                        Anda Yakin ingin menghapus Mitra/Marketing
                                                        "{{ $MitraMarketing->nama }}"?
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
                                                        onclick="hapusData('{{ route('adminMitraMarketing.destroy', $MitraMarketing->id) }}')"
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script></script>
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

        function hapusData(url) {
            // if (confirm('Yakin Hapus Kategori')) {
            $.post(url, {
                    '_token': $('[name=csrf-token').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                    Swal.fire(
                        'Sukses',
                        'Sukses Menghapus',
                        'success'
                    )
                    window.location.href = '/adminMitraMarketing';
                })
                .fail((errors) => {
                    alert('Tidak Terhapus');
                    return;
                });
            // }
        }
    </script>
@endsection
