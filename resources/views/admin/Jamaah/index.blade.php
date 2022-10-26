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
                                    <th width="5%">Mitra / Marketing</th>
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

                                        <td> <button class="btn btn-warning btn-sm" style="margin: 5px" data-toggle="modal"
                                                data-target="#ModalGantiStatus-{{ $Jamaah->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-edit" style="font-size:10px "></i>
                                                </span>
                                                Ganti Status
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
                                    <!-- Modal Ganti Status-->
                                    <div class="modal fade" id="ModalGantiStatus-{{ $Jamaah->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{ route('adminJamaah.update', $Jamaah->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                {{ csrf_field() }}
                                                <div class="modal-content">

                                                    <div class="modal-header border-0">
                                                        <h5 class="modal-title">
                                                            Ganti status Jamaah
                                                            "{{ $Jamaah->nama }}"
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="status">status</label>
                                                                    <select name="status" id="status"
                                                                        class="form-control" required>
                                                                        <option value="-" disabled>Pilih status
                                                                        </option>
                                                                        @if ($Jamaah->status === 'diterima')
                                                                            <option value="diterima" selected>Diterima
                                                                            </option>
                                                                            <option value="dikerjakan">Dikerjakan</option>
                                                                            <option value="selesai">Selesai </option>
                                                                        @elseif($Jamaah->status === 'dikerjakan')
                                                                            <option value="diterima">Diterima</option>
                                                                            <option value="dikerjakan" selected>Dikerjakan
                                                                            </option>
                                                                            <option value="selesai">Selesai </option>
                                                                        @elseif($Jamaah->status === 'selesai')
                                                                            <option value="diterima">Diterima</option>
                                                                            <option value="dikerjakan">Dikerjakan</option>
                                                                            <option value="selesai" selected>Selesai
                                                                            </option>
                                                                        @endif

                                                                    </select>
                                                                    @error('status')
                                                                        <div class="alert alert-danger">{{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer border-0">
                                                        <button type="submit" class="btn btn-primary">Ubah
                                                            Status</button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Tutup</button>
                                                    </div>

                                                </div>
                                        </div>
                                    </div>
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
