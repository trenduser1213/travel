@extends('admin.baseAdmin')

@section('title')
    Admin Artikel
@endsection

@section('body')
    <H1>Admin Artikel</H1>
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
                        <h4 class="card-title">Data Artikel</h4>
                        <a href="{{ route('adminArtikel.create') }}" style="margin-left:auto"><button
                                class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>Tambah Artikel
                            </button></a>

                    </div>
                </div>
                <div class="card-body">

                    <div class="box-body table-responsive">
                        <table id="tableFoto" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th width="100%">Foto</th>
                                    <th width="5%">Tampil di Beranda</th>
                                    <th width="5%">Tampil di Halaman Artikel</th>
                                    <th width="5%">Di publish pada :</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody><?php $n = 1; ?>
                                @foreach ($Artikel as $Artikel)
                                    <tr>
                                        <td>{{ $n++ }}</td>
                                        <td>{{ $Artikel->judul }}</td>
                                        <td>{{ $Artikel->written_by }}</td>
                                        <td><img src="{{ $Artikel->gambar }}" alt="{{ $Artikel->judul }}" class="mt-2 mb-2"
                                                style="max-width:100%">
                                        </td>
                                        <td>
                                            @if ($Artikel->is_tampil_di_beranda != 'ya')
                                                <center><i class="fa fa-times" style="color: brown"></i></center>
                                            @else
                                                <center><i class="fa fa-check" style="color: green"></i></center>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($Artikel->is_tampil_di_halaman_artikel != 'ya')
                                                <center><i class="fa fa-times" style="color: brown"></i></center>
                                            @else
                                                <center><i class="fa fa-check" style="color: green"></i></center>
                                            @endif
                                        </td>

                                        <td>{{ $Artikel->published_at }}</td>

                                        <td>
                                            <a href="{{ route('detailArtikel', ['post' => $Artikel->slug, 'mitra' => 'safari']) }}"
                                                target="blank"><button class="btn btn-info btn-sm" style="margin: 5px">
                                                    <span class="btn-label">
                                                        <i class="fa fa-info" style="font-size:10px "></i>
                                                    </span>
                                                    Detail
                                                </button></a>
                                            <a href="{{ route('adminArtikel.edit', $Artikel->id) }}"><button
                                                    class="btn btn-success btn-sm" style="margin: 5px">
                                                    <span class="btn-label">
                                                        <i class="fa fa-edit" style="font-size:10px"></i>
                                                    </span>
                                                    Edit
                                                </button></a>
                                            <button class="btn btn-danger btn-sm" style="margin: 5px" data-toggle="modal"
                                                data-target="#ModalFotoHapus-{{ $Artikel->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-trash" style="font-size:10px"></i>
                                                </span>
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>

                    </div>
                    <!-- Modal Hapus-->
                    <div class="modal fade" id="ModalFotoHapus-{{ $Artikel->id }}" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header border-0">
                                    <h5 class="modal-title">
                                        Anda Yakin ingin menghapus Artikel "{{ $Artikel->judul }}"?
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                </div>
                                <div class="modal-footer border-0">
                                    <button onclick="hapusData('{{ route('adminArtikel.destroy', $Artikel->id) }}')"
                                        type="" id="addRowButton" class="btn btn-primary">Hapus</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
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
