@extends('admin.baseAdmin')
@section('title')
    Tambah Artikel
@endsection
@section('body')
    <div class="card">
        <div class="card-header">
            <div class="h2">Tambah artikel</div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('adminArtikel.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="nama">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                placeholder="Masukkan Judul Artikel" value="" required>
                            @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="written_by">Penulis</label>
                            <input type="text" class="form-control" id="written_by" name="written_by"
                                placeholder="Masukkan Nama Penulis" value="" required>
                            @error('written_by')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control file-input @error('gambar') is-invalid @enderror"
                                accept=".jfif,.jpg,.jpeg,.png,.gif" id="image" name="gambar">
                            @error('gambar')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <img id="preview-image-before-upload" alt="preview image"
                            style="max-height:250px; margin-left:30px;">

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Kategori Artikel</label>
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="-" selected disabled>Pilih Kategori</option>
                                @foreach ($kategori as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="is_tampil_di_beranda">Tampilkan di Halaman Beranda?</label>
                            <select name="is_tampil_di_beranda" id="is_tampil_di_beranda" class="form-control" required>
                                <option value="-" selected disabled>Pilih Opsi</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                            @error('is_tampil_di_beranda')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="is_tampil_di_halaman_artikel">Tampilkan di Halaman artikel?</label>
                            <select name="is_tampil_di_halaman_artikel" id="is_tampil_di_beranda" class="form-control"
                                required>
                                <option value="-" selected disabled>Pilih Opsi</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                            @error('is_tampil_di_halaman_artikel')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="body">Isi Artikel</label>
                            <textarea class="form-control" id="descSummernote" name="descSummernote" rows="3"></textarea>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $('#descSummernote').summernote({

            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
            tabsize: 2,
            height: 300
        });
    </script>
@endsection
