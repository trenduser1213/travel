@extends('admin.baseAdmin')

@section('title')
    Admin Peminat
@endsection

@section('body')
    <H1>Admin Peminat</H1>
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
                                    <th>Aksi</th>
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

                                        <td> <button class="btn btn-warning btn-sm" style="margin: 5px" data-toggle="modal"
                                                data-target="#ModalGantiStatus-{{ $Peminat->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-edit" style="font-size:10px "></i>
                                                </span>
                                                Ganti Status
                                            </button>
                                            <button class="btn btn-danger btn-sm" style="margin: 5px" data-toggle="modal"
                                                data-target="#ModalFotoHapus-{{ $Peminat->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-trash" style="font-size:10px"></i>
                                                </span>
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Modal Ganti Status-->
                                    <div class="modal fade" id="ModalGantiStatus-{{ $Peminat->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{ route('adminPeminat.update', $Peminat->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                {{ csrf_field() }}
                                                <div class="modal-content">

                                                    <div class="modal-header border-0">
                                                        <h5 class="modal-title">
                                                            Ganti status Peminat
                                                            "{{ $Peminat->nama }}"
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('adminPeminat.update', $Peminat->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        {{ csrf_field() }}
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="status">status</label>
                                                                        <select name="status" id="status"
                                                                            class="form-control" required>
                                                                            <option value="-" disabled>Pilih status
                                                                            </option>
                                                                            @if ($Peminat->status === 'diterima')
                                                                                <option value="diterima" selected>Diterima
                                                                                </option>
                                                                                <option value="dihubungi">Sudah Dihubungi
                                                                                </option>
                                                                                <option value="selesai">Selesai </option>
                                                                            @elseif($Peminat->status === 'Sudah Dihubungi')
                                                                                <option value="diterima">Diterima</option>
                                                                                <option value="dihubungi" selected>
                                                                                    Sudah Dihubungi
                                                                                </option>
                                                                                <option value="selesai">Selesai </option>
                                                                            @elseif($Peminat->status === 'selesai')
                                                                                <option value="diterima">Diterima</option>
                                                                                <option value="dihubungi">Sudah Dihubungi
                                                                                </option>
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
                                                    </form>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- Modal Hapus-->
                                    <div class="modal fade" id="ModalFotoHapus-{{ $Peminat->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header border-0">
                                                    <h5 class="modal-title">
                                                        Anda Yakin ingin menghapus Peminat {{ $Peminat->nama }}?
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
                                                        onclick="hapusData('{{ route('adminPeminat.destroy', $Peminat->id) }}')"
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
                    Swal.fire(
                        'Sukses',
                        'Sukses Menghapus',
                        'success'
                    )
                    window.location.href = '/adminPeminat';
                })
                .fail((errors) => {
                    alert('Tidak Terhapus');
                    return;
                });
            // }
        }
    </script>
@endsection
