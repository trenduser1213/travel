@extends('admin.baseAdmin')

@section('title')
    Edit Video
@endsection

@section('body')
    <div class="page-header">
        <h4 class="page-title">Edit Video</h4>
    </div>
    <div class="col-md-6">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                Data telah di tambahkan
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('adminGaleriVideo.update', $video->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                {{ csrf_field() }}

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" id="judul" name="judul"
                                        placeholder="Masukkan Judul Video" value="{{ $video->judul }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="link">Link Video</label>
                                    <textarea name="link" id="link" rows="3" class="form-control" required>{{ $video->link }}</textarea>
                                    <small class="text-warning">Jika ingin mengganti link video, silahkan ganti link src nya
                                        saja. contoh :
                                        src="https://www.youtube.com/embed/hxz0wnyBfT8" menjadi
                                        src="https://www.youtube.com/embed/sdhj08XQfD8"</small>
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
                                    @error('link')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group ">
                                    <label for="judul">Tampilkan
                                        di Beranda?</label>
                                    <select class="form-control" name="is_tampil_di_beranda" id="is_tampil_di_beranda"
                                        required>
                                        <option value="-" disabled>Pilih</option>
                                        @if ($video->is_tampil_di_beranda === 'tidak')
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
                                    <select class="form-control" name="is_tampil_di_galeri" id="is_tampil_di_galeri"
                                        required>
                                        <option value="-" disabled selected>Pilih</option>
                                        @if ($video->is_tampil_di_galeri === 'tidak')
                                            <option value="ya">Ya</option>
                                            <option value="tidak" selected>Tidak</option>
                                        @else
                                            <option value="ya" selected>Ya</option>
                                            <option value="tidak">Tidak</option>
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="video">Video Preview</label> <br>
                                    {!! $video->link !!}
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success" type="submit">Simpan</button>
                        <button class="btn btn-danger">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
