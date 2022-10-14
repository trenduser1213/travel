@extends('admin.baseAdmin')
@section('body')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Add Row</h4>
                    <button class="btn btn-primary btn-round ml-auto" onclick="addKategori('{{route('CategoryPost.store')}}')" data-toggle="modal" data-target="">
                        <i class="fa fa-plus"></i>
                        Kategori Artikel
                    </button>
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
                                            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required autofocus>
                                            <span class="help-block with-errors"></span>
                                                @error('nama_kategori')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="slug" class="col-md-2 col-md-offset-1 control-label">slug</label>
                                        <div class="col-md-8">
                                            <input type="text" name="slug" id="slug" class="form-control" required autofocus>
                                            <span class="help-block with-errors"></span>
                                                @error('slug')
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
                    <table id="tableProduct" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="">no</th>
                                <th>produk</th>
                                <th>Slug</th>                                
                                <th>gambar</th>
                                <th>harga</th>
                                <th>tanggal berangkat</th>
                                <th>durasi</th>
                                <th>total seat</th>
                                <th>berangkat dari</th>
                                <th>hotel</th>
                                <th>maskapai</th>
                                <th>tampil di beranda</th>
                                <th>tampil di hal produk</th>
                                <th width=""><i class="fa fa-gear"></i>action</th>
                            </tr>
                        </thead>
                        <tbody><?php $n=0; ?>
                            @foreach ($produks as $produk)
                                
                                <tr>
                                    <td>{{++$n}}</td>
                                    <td>{{ $produk->nama}}</td>
                                    <td>{{ $produk->slug}}</td>
                                    <td>{{ $produk->gambar}}</td>
                                    <td>{{ $produk->harga}}</td>
                                    <td>{{ $produk->tgl_berangkat}}</td>
                                    <td>{{ $produk->durasi}}</td>
                                    <td>{{ $produk->total_seat}}</td>
                                    <td>{{ $produk->berangkat_dari}}</td>
                                    <td>{{ $produk->hotel}}</td>
                                    <td>{{ $produk->maskapai}}</td>
                                    <td>{{ $produk->is_tampil_di_beranda}}</td>
                                    <td>{{ $produk->is_tampil_di_halaman_produk}}</td>
                                    <td>
                                        <div class="form-button-action">
                                            <button onclick="editForm('{{route('CategoryPost.update',$produk->id)}}')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button onclick="hapusData('{{route('CategoryPost.destroy',$produk->id)}}')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th width="">no</th>
                                <th>produk</th>
                                <th>Slug</th>                                
                                <th>gambar</th>
                                <th>harga</th>
                                <th>tanggal berangkat</th>
                                <th>durasi</th>
                                <th>total seat</th>
                                <th>berangkat dari</th>
                                <th>hotel</th>
                                <th>maskapai</th>
                                <th>tampil di beranda</th>
                                <th>tampil di hal produk</th>
                                <th width=""><i class="fa fa-gear"></i>action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $('#summernote').summernote({
        placeholder: 'Atlantis',
        fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
        tabsize: 2,
        height: 300
    });
</script>
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
            $('#RowModal [name=nama_kategori]').val(response.nama);
            $('#RowModal [name=slug]').val(response.slug);
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
            window.location.href='/CategoryPost';
        })
        .fail((errors)=>{
          alert('Tidak Terhapus'); 
          return;
        });
      }
    }

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    let table;

$(function() {
    table = $('#tableProduct').DataTable({
        paging: true
        , lengthChange : true
        , searching : true
        , ordering : true
        , info : true
        , autoWidth : false,
        // 
    });
});
</script>

@endsection