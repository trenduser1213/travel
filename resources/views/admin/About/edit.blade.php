@extends('admin.baseAdmin')
@section('title')
    Admin Tentang Kami
@endsection
@section('body')
    <h1>Admin Tentang Kami</h1>
    <form action="{{ route('adminAbout.update', $id = 1) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        {{ csrf_field() }}
        <div class="card">
            <div class="card-header">
                <h4>Informasi Halaman</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Judul Halaman</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                placeholder="Masukkan Judul Artikel" value="{{ $About->judul }}" required>
                            @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="subjudul">Subjudul Halaman</label>
                            <input type="text" class="form-control" id="subjudul" name="subjudul"
                                placeholder="Masukkan Nama Penulis" value="{{ $About->subjudul }}" required>
                            @error('written_by')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="h4">Informasi Tentang Kami</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="motto">Motto</label>
                            <input type="text" class="form-control" id="motto" name="motto"
                                placeholder="Masukkan Motto" value="{{ $About->motto }}" required>
                            @error('motto')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="submotto">Sub-motto</label>
                            <input type="text" class="form-control" id="submotto" name="submotto"
                                placeholder="Masukkan Sub-motto" value="{{ $About->submotto }}" required>
                            @error('submotto')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="submotto">Link Video</label>
                            <input type="text" class="form-control" id="link_video" name="link_video"
                                placeholder="Masukkan link video embed" value="{{ $About->link_video }}" required>
                            @error('video')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="col-md-7">
                                    <button class="btn btn-primary btn-sm mt-2" type="button" data-toggle="collapse"
                                        data-target="#collapseInfoVideo" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Bagaimana cara mendapatkan link Video?
                                    </button>
                                    <div class="collapse" id="collapseInfoVideo">
                                        <div class="card card-body">
                                            1. Kunjungi video yang anda ingin masukkan dari youtube <br>

                                            2. Klik tombol share <br>
                                            <img src="{{ '/assets' }}../../admin-assets/assets/img/galeri/share.png"
                                                alt="">
                                            3. Klik "Embed"<br>
                                            <img src="{{ '/assets' }}../../admin-assets/assets/img/galeri/embed.png"
                                                alt="">
                                            4. Copy source video <br>
                                            <img src="{{ '/assets' }}../../admin-assets/assets/img/galeri/link.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="body">Teks disamping Video</label>
                            <textarea class="form-control" id="descSummernote" name="teks_sejajar_video" rows="1">{{ $About->teks_sejajar_video }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="body">Teks dibawah Video</label>
                            <textarea class="form-control" id="descSummernote2" name="teks_di_bawah_video" rows="2">{{ $About->teks_di_bawah_video }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="body">Teks di halaman beranda</label>
                            <textarea class="form-control" id="descSummernote3" name="teks_di_beranda" rows="5">{{ $About->teks_di_beranda }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Konfirmasi-->

        <div class="modal fade" id="ModalKonfirmasi" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header border-0">
                        <h5 class="modal-title">
                            Anda Yakin ingin mengubah konten "Tentang Kami"?
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" id="addRowButton" class="btn btn-primary">Ya, Saya Yakin</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    </div>

                </div>
            </div>
        </div>
    </form>

    <button class="btn btn-primary ml-auto" style="margin-left:auto" data-toggle="modal" data-target="#ModalKonfirmasi">
        Simpan
    </button>
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
    <script>
        $('#descSummernote2').summernote({

            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
            tabsize: 2,
            height: 300
        });
    </script>
    <script>
        $('#descSummernote3').summernote({

            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
            tabsize: 2,
            height: 300
        });
    </script>
@endsection
