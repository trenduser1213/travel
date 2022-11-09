@extends('admin.baseAdmin')
@section('body')
    <div class="card">
        <div class="card-header">
            <h4>Informasi Halaman</h4>
        </div>
        <form action="{{ route('adminKetentuan.update', $syarat->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Judul Halaman</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                placeholder="Masukkan Judul Artikel" value="{{ $syarat->judul }}" required>
                            @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subjudul">Subjudul Halaman</label>
                            <input type="text" class="form-control" id="subjudul" name="subjudul"
                                placeholder="Masukkan Nama Penulis" value="{{ $syarat->subjudul }}" required>
                            @error('subjudul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="judul1" class="form-label pb-2">Judul 1</label>
                        @error('judul1')
                            {{ $message }}
                        @enderror
                        <input required type="text" class="form-control" value="{{ $syarat->judul1 }}" id="judul1"
                            placeholder="" name="judul1" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="old">Foto Sekarang</label> <br>
                                <img src="{{ '/assets' }}../../../{{ $syarat->gambar1 }}" alt=""
                                    style="max-width: 100%; border :1px black">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="foto">Ganti Foto</label>
                                <input type="file" class="form-control file-input @error('gambar1') is-invalid @enderror"
                                    accept=".jfif,.jpg,.jpeg,.png,.gif" id="image" name="gambar1">
                                <img id="preview-image-before-upload" alt="preview image"
                                    style="max-width:100%; margin-top:10px"> <br>
                                <small class="text-danger"><i class="fa fa-info-circle"></i> Masukkan foto
                                    dengan
                                    ketentuan :
                                    <ul>
                                        <li>ukuran maksimal 2 MB</li>
                                        <li>Resolusi 770x500 px (1:1) </li>
                                    </ul>
                                </small>
                                @error('gambar1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="isi1" class="form-label pb-2">Deskripsi 1</label>
                        <textarea required class="form-control" value="" id="isi1" name="isi1" rows="3">{{ $syarat->isi1 }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Syarat dan Ketentuan</div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="judul2" class="form-label pb-2">Judul 2</label>
                        @error('judul2')
                            {{ $message }}
                        @enderror
                        <input required type="text" class="form-control" value="{{ $syarat->judul2 }}" id="judul2"
                            placeholder="" name="judul2" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="old">Foto Sekarang</label> <br>
                                <img src="{{ '/assets' }}../../../{{ $syarat->gambar2 }}" alt=""
                                    style="max-width: 100%; border :1px black">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="foto">Ganti Foto</label>
                                <input type="file" class="form-control file-input @error('gambar2') is-invalid @enderror"
                                    accept=".jfif,.jpg,.jpeg,.png,.gif" id="image2" name="gambar2">
                                <img id="preview-image-before-upload" alt="preview image"
                                    style="max-width:100%; margin-top:10px"> <br>
                                <small class="text-danger"><i class="fa fa-info-circle"></i> Masukkan foto
                                    dengan
                                    ketentuan :
                                    <ul>
                                        <li>ukuran maksimal 2 MB</li>
                                        <li>Resolusi 770x500 px (1:1) </li>
                                    </ul>
                                    Foto memang tidak di preview, namun perubahan akan tetap tersimpan
                                </small>
                                @error('gambar2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="isi2" class="form-label pb-2">Deskripsi 2</label>
                        <textarea required class="form-control" value="" id="isi2" name="isi2" rows="3">{{ $syarat->isi2 }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="judul3" class="form-label pb-2">Judul 3</label>
                        @error('judul3')
                            {{ $message }}
                        @enderror
                        <input required type="text" class="form-control" value="{{ $syarat->judul3 }}"
                            id="judul3" placeholder="" name="judul3" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="old">Foto Sekarang</label> <br>
                                <img src="{{ '/assets' }}../../../{{ $syarat->gambar3 }}" alt=""
                                    style="max-width: 100%; border :1px black">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="foto">Ganti Foto</label>
                                <input type="file"
                                    class="form-control file-input @error('gambar3') is-invalid @enderror"
                                    accept=".jfif,.jpg,.jpeg,.png,.gif" id="image3" name="gambar3">

                                <small class="text-danger"><i class="fa fa-info-circle"></i> Masukkan foto
                                    dengan
                                    ketentuan :
                                    <ul>
                                        <li>ukuran maksimal 2 MB</li>
                                        <li>Resolusi 770x500 px (1:1) </li>
                                    </ul>
                                    Foto memang tidak di preview, namun perubahan akan tetap tersimpan
                                </small>
                                @error('gambar3')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="isi3" class="form-label pb-2">Deskripsi 3</label>
                        <textarea required class="form-control" value="" id="isi3" name="isi3" rows="3">{{ $syarat->isi3 }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary me-md-2" type="submit">Submit</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $('#isi1').summernote({

            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
            tabsize: 2,
            height: 300
        });
        $('#isi2').summernote({

            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
            tabsize: 2,
            height: 300
        });
        $('#isi3').summernote({

            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
            tabsize: 2,
            height: 300
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        function addKategori(url) {
            $("#RowModal").modal('show');
            $("#RowModal .modal-title").text('Tambah kategori');
            $('#RowModal form')[0].reset();
            $('#RowModal form').attr('action', url);
            $('#RowModal [name=_method]').val('post');
            $('#RowModal [name=nama_kategori]').focus();
        }

        function editForm(url) {
            $("#RowModal").modal('show');
            $("#RowModal .modal-title").text('Edit kategori');
            $('#RowModal form')[0].reset();
            $('#RowModal form').attr('action', url);
            $('#RowModal [name=_method]').val('put');
            $('#RowModal [name=nama_kategori]').focus();
            $.get(url)
                .done((response) => {
                    $('#RowModal [name=nama_kategori]').val(response.nama_kategori_artikel);
                })
                .fail((errors) => {
                    alert("Data Tidak Muncul");
                });
        }

        function hapusData(url) {
            if (confirm('Yakin Hapus Kategori')) {
                $.post(url, {
                        '_token': $('[name=csrf-token').attr('content'),
                        '_method': 'delete'
                    })
                    .done((response) => {
                        alert('sukses menghapus');
                        window.location.href = '/adminArtikel';
                    })
                    .fail((errors) => {
                        alert('Tidak Terhapus');
                        return;
                    });
            }
        }
    </script>
@endsection
