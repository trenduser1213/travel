@extends('admin.baseAdmin')
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
            <div class="mb-3">
                <label for="judul" class="form-label pb-2">Judul</label>
                @error('judul')
                    {{ $message }}
                    
                @enderror
                <input type="text" class="form-control" id="judul" value="{{$syaratKetentuans->judul}}" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label pb-2">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" value="">
            </div>
            <div class="mb-3">
                <label for="descSummernote" class="form-label pb-2">Deskripsi</label>
                <textarea class="form-control" id="descSummernote" name="descSummernote" rows="3">{{$syaratKetentuans->decs}}</textarea>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="submit">Submit</button>                
            </div>
        </div>
    </form>
</div>

<div class="terms-and-cond section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-aligncenter">
                <div class="service-wrap">
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-6 custom-grid col-12">
                            <div class="post post-text-wrap">
                                <div class="service-single-img">
                                    {{-- <img src="{{ asset('assets/') }}../../{{ $syarat->gambar1 }}" --}}
                                        {{-- style="height:auto;"alt=""> --}}
                                </div>
                                <div class="service-text">
                                    {{-- <h2>{{ $syarat->judul1 }}</h2> --}}
                                    <br>
                                    <div id="Persyaratan" class="tab-pane active">
                                        {{-- {!! $syarat->isi1 !!} --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 custom-grid col-12">
                            <div class="post post-text-wrap">
                                <div class="service-single-img">
                                    {{-- <img src="{{ asset('assets/') }}../../{{ $syarat->gambar2 }}" --}}
                                        {{-- style="height:auto;"alt=""> --}}
                                </div>
                                <div class="service-text">
                                    {{-- <h2>{{ $syarat->judul2 }}</h2> --}}
                                    <br>
                                    <div id="Biaya">
                                        {{-- {!! $syarat->isi2 !!} --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 custom-grid col-12">
                            <div class="post post-text-wrap">
                                <div class="service-single-img">
                                    {{-- <img src="{{ asset('assets/') }}../../{{ $syarat->gambar2 }}"
                                        style="height:auto;"alt=""> --}}
                                </div>
                                <div class="service-text">
                                    {{-- <h2>{{ $syarat->judul3 }}</h2> --}}
                                    <br>
                                    <div id="Pembatalan">
                                        {{-- {!! $syarat->isi3 !!} --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $('#descSummernote').summernote({
        inheritPlaceholder: true,
        value: '<?php echo json_encode($syaratKetentuans->decs)?>' ,
        fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
        tabsize: 2,
        height: 300
    });
</script>
@endsection