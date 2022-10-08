@extends('admin.baseAdmin')
@section('body')
<!-- .wpo-breadcumb-area start -->
<div class="card">
    <div class="card-header">
        <div class="wpo-breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap text-center">
                            <h2>{{ $syarat->judul }}</h2><br><hr>
                            
                            <span>{{ $syarat->subjudul }}</span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .wpo-breadcumb-area end -->
    </div>
    <div class="card-body">
        <!-- terms-and-cond-area start -->
        <div class="terms-and-cond section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-aligncenter">
                        <div class="service-wrap">
                            <div class="row">
        
                                <div class="col-lg-4 ">
                                    <div class="post post-text-wrap">
                                        <div class="service-single-img">
                                            <img heoght="200" alt="{{ $syarat->gambar1}}" width="304" src="{{ asset('assets/') }}../../{{ $syarat->gambar1 }}"
                                                style="height:auto;">
                                        </div>
                                        <div class="service-text">
                                            <h2>{{ $syarat->judul1 }}</h2>
                                            <br>
                                            <div id="Persyaratan" class="tab-pane active">
                                                {!! $syarat->isi1 !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-lg-4 ">
                                    <div class="post post-text-wrap">
                                        <div class="service-single-img">
                                            <img heoght="200" alt="{{ $syarat->gambar1}}" width="304" src="{{ asset('assets/') }}../../{{ $syarat->gambar2 }}"
                                                style="height:auto;">
                                        </div>
                                        <div class="service-text">
                                            <h2>{{ $syarat->judul2 }}</h2>
                                            <br>
                                            <div id="Biaya">
                                                {!! $syarat->isi2 !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-lg-4 ">
                                    <div class="post post-text-wrap">
                                        <div class="service-single-img">
                                            <img heoght="200" alt="{{ $syarat->gambar1}}" width="304" src="{{ asset('assets/') }}../../{{ $syarat->gambar2 }}"
                                                style="height:auto;">
                                        </div>
                                        <div class="service-text">
                                            <h2>{{ $syarat->judul3 }}</h2>
                                            <br>
                                            <div id="Pembatalan">
                                                {!! $syarat->isi3 !!}
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
    </div>
</div>
<div class="card">
    <div class="card-header">Edit Syarat dan Ketentuan</div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input required.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('adminKetentuan.update',$syarat->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">judul</label>
                <div class="col-sm-10">
                  <input required type="text"  class="form-control" value="{{$syarat->judul}}" id="judul" name="judul" >
                </div>
              </div>
              <div class="mb-3 row">
                <label for="subjudul" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input required type="text" class="form-control" value="{{$syarat->subjudul}}" id="subjudul" name="subjudul">
                </div>
              </div>
            <div class="row">  
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="judul1" class="form-label pb-2">judul1</label>
                        @error('judul1')
                            {{ $message }}
                            
                        @enderror
                        <input required type="text" class="form-control" value="{{$syarat->judul1}}" id="judul1" placeholder="" name="judul1" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar1" class="form-label pb-2">gambar1</label>
                        <input required type="file" class="form-control" value="{{$syarat->gambar1}}" id="gambar1" name="gambar1" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="isi1" class="form-label pb-2">Deskripsi</label>
                        <textarea required class="form-control" value="{{$syarat->isi1}}" id="isi1" name="isi1" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="judul2" class="form-label pb-2">Judul</label>
                        @error('judul2')
                            {{ $message }}
                            
                        @enderror
                        <input required type="text" class="form-control" value="{{$syarat->judul2}}" id="judul2" placeholder="" name="judul2" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar2" class="form-label pb-2">Gambar</label>
                        <input required type="file" class="form-control" value="{{$syarat->gambar2}}" id="gambar2" name="gambar2" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="isi2" class="form-label pb-2">Deskripsi</label>
                        <textarea required class="form-control" value="{{$syarat->isi2}}" id="isi2" name="isi2" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="judul3" class="form-label pb-2">Judul</label>
                        @error('judul3')
                            {{ $message }}
                            
                        @enderror
                        <input required type="text" class="form-control" value="{{$syarat->judul3}}" id="judul3" placeholder="" name="judul3" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar3" class="form-label pb-2">Gambar</label>
                        <input required type="file" class="form-control" value="{{$syarat->judul}}" id="gambar3" name="gambar3" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="isi3" class="form-label pb-2">Deskripsi</label>
                        <textarea required class="form-control" value="{{$syarat->judul}}" id="isi3" name="isi3" rows="3"></textarea>
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
<



{{-- <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Kategori Artikel</h4>
                    <a class="btn btn-primary btn-round ml-auto" href="{{route('adminKetentuan.create')}}">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <!-- Modal -->
                <div class="modal fade" id="RowModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="" method="post">
                                @csrf
                                @method('post')
                                <div class="modal-header border-0">
                                    <h5 class="modal-title">
                                        
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group row">
                                        <label for="nama_kategori" class="col-md-2 col-md-offset-1 control-label">kategori</label>
                                        <div class="col-md-8">
                                            <input required type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="" required autofocus>
                                            <span class="help-block with-errors"></span>
                                                @error('nama_kategori')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer border-0">
                                    <button type="submit" id="addRowButton" class="btn btn-primary">Add</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="box-body table-responsive">
                    <table id="tableSyarat" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="10%">no</th>
                                <th>Kategori</th>
                                <th width="10%"><i class="fa fa-gear"></i>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ketentuans as $ketentuan)
                                
                                <tr>
                                    <td>1</td>
                                    <td>{{ $ketentuan->judul }}</td>
                                    <td>
                                        <div class="form-button-action">
                                            <a href="{{route('adminKetentuan.edit',$ketentuan->id_syarat)}}" type="" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button  type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th width="10%">no</th>
                                <th>Kategori</th>
                                <th width="10%"><i class="fa fa-gear"></i>action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div> --}}
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
    function editForm(url){
        $("#RowModal").modal('show');
        $("#RowModal .modal-title").text('Edit kategori');
        $('#RowModal form')[0].reset();
        $('#RowModal form').attr('action', url);
        $('#RowModal [name=_method]').val('put');
        $('#RowModal [name=nama_kategori]').focus();
        $.get(url)
          .done((response)=>{
            $('#RowModal [name=nama_kategori]').val(response.nama_kategori_artikel);
          })
          .fail((errors)=>{
              alert("Data Tidak Muncul");
          });
    }
    function hapusData(url){
      if(confirm('Yakin Hapus Kategori')){
        $.post(url,{
         '_token' : $('[name=csrf-token').attr('content'),
         '_method' : 'delete'
        })
        .done((response)=>{
            alert('sukses menghapus');
            window.location.href='/adminArtikel';
        })
        .fail((errors)=>{
          alert('Tidak Terhapus'); 
          return;
        });
      }
    }

</script>

@endsection