@extends('admin.baseAdmin')

@section('title')
    Admin Jamaah
@endsection

@section('body')
    <H1>Admin Jamaah</H1>
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
                        <h4 class="card-title">Data Jamaah</h4>
                        <a href="{{ route('adminJamaah.create') }}" style="margin-left:auto"><button
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
                                    <th>Mitra/Marketing</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody><?php $n = 1; ?>
                                @foreach ($Jamaah as $Jamaah)
                                    <tr>
                                        <td>{{ $n++ }}</td>
                                        <td>{{ $Jamaah->nama }}</td>
                                        <td>{{ $Jamaah->jeniskelamin }}</td>
                                        <td>{{ $Jamaah->HP }}</td>
                                        <td>{{ $Provinsi->name }}</td>
                                        <td><img src="{{ $Jamaah->gambar }}" alt="{{ $Jamaah->nama }}"
                                                style="max-height: 125px"></td>
                                        <td>
                                            <p class="mt-2 mb-2">{{ $Jamaah->Jamaah }}</p>
                                        </td>
                                        <td>
                                            @if ($Jamaah->is_tampil != 'ya')
                                                <center><i class="fa fa-times" style="color: brown"></i></center>
                                            @else
                                                <center><i class="fa fa-check" style="color: green"></i></center>
                                            @endif
                                        </td>

                                        <td> <button class="btn btn-info btn-sm" style="margin: 5px" data-toggle="modal"
                                                data-target="#ModalTestiDetail-{{ $Jamaah->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-info" style="font-size:10px "></i>
                                                </span>
                                                Detail
                                            </button>
                                            <a href="{{ route('adminJamaah.edit', $Jamaah->id) }}"><button
                                                    class="btn btn-success btn-sm" style="margin: 5px">
                                                    <span class="btn-label">
                                                        <i class="fa fa-edit" style="font-size:10px"></i>
                                                    </span>
                                                    Edit
                                                </button></a>
                                            <button class="btn btn-danger btn-sm" style="margin: 5px" data-toggle="modal"
                                                data-target="#ModalFotoHapus-{{ $Jamaah->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-trash" style="font-size:10px"></i>
                                                </span>
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Modal Hapus-->
                                    <div class="modal fade" id="ModalFotoHapus-{{ $Jamaah->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header border-0">
                                                    <h5 class="modal-title">
                                                        Anda Yakin ingin menghapus Jamaah {{ $Jamaah->nama }}?
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
                                                        onclick="hapusData('{{ route('adminJamaah.destroy', $Jamaah->id) }}')"
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

        function hapusData(url) {
            // if (confirm('Yakin Hapus Kategori')) {
            $.post(url, {
                    '_token': $('[name=csrf-token').attr('content'),
                    '_method': 'delete'
                })
                .done((response) => {
                    alert('sukses menghapus');
                    window.location.href = '/adminTestimoni';
                })
                .fail((errors) => {
                    alert('Tidak Terhapus');
                    return;
                });
            // }
        }
    </script>
@endsection