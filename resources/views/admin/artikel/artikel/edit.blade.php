@extends('admin.baseAdmin')
@section('title')
    Edit Artikel
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
        <form action="{{ route('adminKetentuan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="nama">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                placeholder="Masukkan Judul Artikel" value="{{ $Artikel->judul }}" required>
                            @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="written_by">Penulis</label>
                            <input type="text" class="form-control" id="written_by" name="written_by"
                                placeholder="Masukkan Nama Penulis" value="{{ $Artikel->written_by }}" required>
                            @error('written_by')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="nama">Kategori Artikel</label>
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="-" disabled>Pilih Kategori</option>
                                @foreach ($kategori as $kategori)
                                    @if ($Artikel->category_post_id === $kategori->id)
                                        <option value="{{ $kategori->id }}" selected>{{ $kategori->nama }}</option>
                                    @else
                                        <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="old">Foto Sekarang</label> <br>
                            <img src="{{ '/assets' }}../../../{{ $Artikel->gambar }}" alt="{{ $Artikel->judul }}"
                                style="max-width: 60%; border :1px black">
                        </div>



                    </div>
                    <div class="col-md-6">


                        <div class="form-group ">
                            <label for="judul">Tampilkan
                                di Beranda?</label>
                            <select class="form-control" name="is_tampil_di_beranda" id="is_tampil_di_beranda" required>

                                <option value="-" disabled selected>Pilih</option>
                                @if ($Artikel->is_tampil_di_beranda === 'tidak')
                                    <option value="ya">Ya</option>
                                    <option value="tidak" selected>Tidak</option>
                                @else
                                    <option value="ya" selected>Ya</option>
                                    <option value="tidak">Tidak</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="judul" class="col-md-4 col-md-offset-1 control-label">Tampilkan
                                di Galeri?</label>
                            <select class="form-control" name="is_tampil_di_galeri" id="is_tampil_di_galeri" required>
                                <option value="-" disabled selected>Pilih</option>
                                @if ($Artikel->is_tampil_di_galeri === 'tidak')
                                    <option value="ya">Ya</option>
                                    <option value="tidak" selected>Tidak</option>
                                @else
                                    <option value="ya" selected>Ya</option>
                                    <option value="tidak">Tidak</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Ganti gambar</label>
                            <input type="file" class="form-control file-input @error('gambar') is-invalid @enderror"
                                accept=".jfif,.jpg,.jpeg,.png,.gif" id="image" name="gambar">
                            <small class="text-info"><i class="fas fa-info-circle"></i> Masukkan gambar dengan ketentuan :
                                <ul>
                                    <li>
                                        Masukkan Gambar jika ingin mengganti gambar yang sudah ada
                                    </li>
                                    <li>Masukkan Gambar dengan
                                        resolusi
                                        1000x667
                                    </li>
                                </ul>
                            </small>
                            @error('gambar')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gambar">Preview Gambar Baru</label><br>
                            <img id="preview-image-before-upload" alt="preview image"
                                style="max-width:100%; margin-top:10px"> <br>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="body">Isi Artikel</label>
                            <textarea class="form-control" id="descSummernote" name="descSummernote" rows="3">{{ $Artikel->body }}</textarea>
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
