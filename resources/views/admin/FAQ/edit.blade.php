@extends('admin.baseAdmin')

@section('title')
    Edit FAQ
@endsection

@section('body')
    <div class="page-header">
        <h4 class="page-title">Edit FAQ</h4>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('adminFAQ.update',$FAQ->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{ csrf_field() }}

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Pertanyaan">Pertanyaan</label>
                                    <textarea name="pertanyaan" id="pertanyaan" rows="3" class="form-control" placeholder="Masukkan Pertanyaan FAQ"
                                        required>{{ $FAQ->pertanyaan }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Tampilkan
                                        di Beranda?</label>
                                    <select class="form-control" name="is_tampil" id="is_tampil" required>

                                        <option value="-" disabled selected>Pilih</option>
                                        @if ($FAQ->is_tampil === 'tidak')
                                            <option value="ya">Ya</option>
                                            <option value="tidak" selected>Tidak</option>
                                        @else
                                            <option value="ya" selected>Ya</option>
                                            <option value="tidak">Tidak</option>
                                        @endif
                                    </select>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="jabatan">Jawaban</label>
                                    <textarea name="jawaban" id="jawaban" rows="3" class="form-control" placeholder="Masukkan Jawaban FAQ" required>{{ $FAQ->jawaban }}</textarea>
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
