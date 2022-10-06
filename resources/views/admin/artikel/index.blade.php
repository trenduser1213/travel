@extends('admin.baseAdmin')
@section('body')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title">Add Row</h4>
                    <button class="btn btn-primary btn-round ml-auto" onclick="addKategori('{{route('adminArtikel.store')}}')" data-toggle="modal" data-target="">
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
                    <table id="tableKategori" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="10%">no</th>
                                <th>Kategori</th>
                                <th width="10%"><i class="fa fa-gear"></i>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategoris as $kategori)
                                
                                <tr>
                                    <td>1</td>
                                    <td>{{ $kategori->nama_kategori_artikel }}</td>
                                    <td>
                                        <div class="form-button-action">
                                            <button onclick="editForm('{{route('adminArtikel.update',$kategori->id_kategori)}}')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button onclick="hapusData('{{route('adminArtikel.destroy',$kategori->id_kategori)}}')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
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

                {{-- <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>
                                    <div class="form-button-action">
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}
            </div>
        </div>
    </div>
</div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    let table;

$(function() {
    table = $('#tableKategori').DataTable({
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