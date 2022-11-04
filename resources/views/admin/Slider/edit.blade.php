@extends('admin.baseAdmin')

@section('title')
    Edit Slider
@endsection

@section('body')
    <div class="page-header">
        <h4 class="page-title">Edit Slider</h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('adminSlider.update', $Slider->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{ csrf_field() }}

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="old">Foto Sekarang</label> <br>
                                    <img src="{{ '/assets' }}../../../{{ $Slider->gambar }}" alt="{{ $Slider->teks2 }}"
                                        style="max-width: 100%; border :1px black">
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Foto Slider Baru</label>
                                    <input type="file"
                                        class="form-control file-input @error('gambar') is-invalid @enderror"
                                        accept=".jfif,.jpg,.jpeg,.png,.gif" id="image" name="gambar">
                                    @error('gambar')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for=""> Preview Foto Baru</label> <br>
                                    <img id="preview-image-before-upload" alt="preview image" style="max-height:250px;">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="judul">Title</label>
                                    <textarea name="teks1" id="teks1" rows="3" class="form-control" placeholder="Masukkan Tittle" required>{{ $Slider->teks1 }}</textarea>
                                    @error('teks1')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="judul">Sub-title</label>
                                    <textarea name="teks2" id="teks2" rows="3" class="form-control" placeholder="Masukkan Sub-tittle" required>{{ $Slider->teks2 }}</textarea>
                                    @error('teks2')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    <label for="judul">Tampilkan
                                        di Beranda?</label>
                                    <select class="form-control" name="is_tampil" id="is_tampil" required>
                                        <option value="-" disabled selected>Pilih</option>
                                        @if ($Slider->is_tampil === 'tidak')
                                            <option value="ya">Ya</option>
                                            <option value="tidak" selected>Tidak</option>
                                        @else
                                            <option value="ya" selected>Ya</option>
                                            <option value="tidak">Tidak</option>
                                        @endif
                                    </select>
                                    @error('is_tampil')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
