@extends('admin.layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Simple Tables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Simple Tables</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card card-navy">
                <div class="card-header">
                  <h3 class="card-title"> Ukuran</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-block btn-default btn-sm" id="btnAddUkuran">Add Data</button>
                  </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-hover text-nowrap" id="dataCostumer">
                    <thead>
                      <tr>
                        <th width="10">No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Waktu Daftar</th>
                        <th width="10">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
    </div>
      <!-- /.modal -->
      <div class="modal fade" id="ukuranModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <form action="#" id="formUkuran" name="formUkuran">
            <div class="modal-header">
              <h4 class="modal-title" id="ukuranModalLabel"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                          <label>Category</label>
                          <select id="idCat" name="idCat" class="form-control" style="width: 100%;" required>
                            <option selected disabled>--Chosee--</option>



                          </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label>Sub Category</label>
                          <select id="idSubCat" name="idSubCat" class="form-control" style="width: 100%;" required>
                            <option selected disabled>--Chosee--</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label>Type Category</label>
                          <select id="idType" name="idType" class="form-control" style="width: 100%;" required>
                            <option selected disabled>--Chosee--</option>
                          </select>
                        </div>
                    </div>
                </div>
                    <div class="dropdown-divider"></div>
                <div class="form-group row">
                    <div class="col-md-1">
                        <label>Size</label>
                            <input type="text" id="size" class="form-control" name="size[]" placeholder="size" required onkeyup="this.value = this.value.toUpperCase()">
                    </div>
                    <div class="col-md-2">
                        <label>Panjang</label>
                        <div class="input-group">
                            <input type="number" id="panjang" class="form-control" name="panjang[]" placeholder="P" required>
                            <div class="input-group-append">
                                <span class="input-group-text">Cm</span>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Lebar</label>
                        <div class="input-group">
                            <input type="number" id="lebar" class="form-control" name="lebar[]" placeholder="L" required>
                            <div class="input-group-append">
                                <span class="input-group-text">Cm</span>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>Umur</label>
                        <input type="text" id="umur" name="umur[]" class="form-control"  placeholder="untuk anak-anak">
                    </div>
                    <div class="col-md-3">
                        <label>Lingkar Dada</label>
                        <div class="input-group">
                            <input type="number" id="lingkar" class="form-control" name="lingkar[]" placeholder="untuk terusan">
                            <div class="input-group-append">
                                <span class="input-group-text">Cm</span>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-1 pt-4">
                        <button type="button" class="btn btn-info btn-sm mt-2 add_field_ukuran">
                            <i class="fa fa-plus"></i>
                          </button>
                    </div>
                </div>
                <div class="field_ukuran"></div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" id="btnSaveCategory" class="btn btn-primary">Submit</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</section>
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>

  <script type="text/javascript">

    $(document).ready(function(){
        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
        });
    });

    $(document).ready(function(){
        $('#dataCostumer').DataTable({
            processing: true,
            serverSide: true,
            "responsive": true,
                ajax: {
                url:"{{ route('dataCostumer.index') }}",
                type: 'GET',
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable:false},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'status', name: 'status'},
                    {data: 'waktu', name: 'waktu'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    ],
                order: [[0, 'desc']]
        });
    });

    $(document).ready(function () {
        $('#umur').inputmask('99th s.d. 99th');
    });

    $('#btnAddUkuran').click(function () {
        $('#btnSaveUkuran').val("create-data");
        $('#id').val('');
        $('.field_ukuran').html("");
        $('#formUkuran').trigger("reset");
        $('#ukuranModalLabel').html("Create Category");
        $('#ukuranModal').modal('show');
        $('select[name="idSubCat"]').empty();
        $('select[name="idType"]').empty();

    });

    $(document).ready(function(){
        $('select[name="idCat"]').on('change', function(){
            var ukuran_id = $(this).val();
                $.ajax({
                    url: ukuran_id+ '/selectCat',
                    type:"GET",
                    dataType:"json",
                    success:function(data){
                    $('select[name="idSubCat"]').empty();
                    if(data == ''){
                        $('#idSubCat').append('<option disabled selected>--Data Tidak Ada--</option>');
                            }else{
                        $('#idSubCat').append('<option disabled selected>--Select One--</option>');
                            }
                        $.each(data, function(key, value){
                            $('select[name="idSubCat"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
        });

    });

    $(document).ready(function(){
        $('select[name="idSubCat"]').on('change', function(){
            var type_id = $(this).val();
                $.ajax({
                    url: type_id+ '/selectSubCat',
                    type:"GET",
                    dataType:"json",
                    success:function(data){
                    $('select[name="idType"]').empty();
                    if(data == ''){
                        $('#idType').append('<option disabled selected>--Data Tidak Ada--</option>');
                            }else{
                        $('#idType').append('<option disabled selected>--Select One--</option>');
                            }
                        $.each(data, function(key, value){
                            $('select[name="idType"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
        });

    });

    $(document).ready(function(){
        var maxField = 5; //Input fields increment limitation
        var addButton = $('.add_field_ukuran'); //Add button selector
        var wrapper = $('.field_ukuran'); //Input field wrapper
        var x = 1; //Initial field counter is 1


        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append( '<div id="row'+x+'">'+
                                    '<div class="form-group row">'+
                                    '<div class="col-md-1">'+
                                        '<input type="text" id="size" class="form-control" name="size[]" placeholder="size" required onkeyup="this.value = this.value.toUpperCase()">'+
                                    '</div>'+
                                    '<div class="col-md-2">'+
                                        '<div class="input-group">'+
                                            '<input type="number" id="panjang" class="form-control" name="panjang[]" placeholder="P" required>'+
                                            '<div class="input-group-append">'+
                                                '<span class="input-group-text">Cm</span>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-2">'+
                                        '<div class="input-group">'+
                                            '<input type="number" id="lebar" class="form-control" name="lebar[]" placeholder="L" required>'+
                                            '<div class="input-group-append">'+
                                                '<span class="input-group-text">Cm</span>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-3">'+
                                        '<input type="text" id="umur" name="umur[]" class="form-control"  placeholder="untuk anak-anak">'+
                                    '</div>'+
                                    '<div class="col-md-3">'+
                                        '<div class="input-group">'+
                                            '<input type="number" id="lingkar" class="form-control" name="lingkar[]" placeholder="untuk terusan">'+
                                            '<div class="input-group-append">'+
                                                '<span class="input-group-text">Cm</span>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-md-1">'+
                                        '<button type="button" id="'+x+'" class="btn btn-danger btn-sm mt-1 remove_field_ukuran">'+
                                            '<i class="fa fa-minus"></i>'+
                                        '</button>'+
                                    '</div>'+
                                    '</div>'+
                                '</div>'); //Add field html
            }
        });
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_field_ukuran', function(e){
            var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
            // e.preventDefault();
            // $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });

    if ($("#formUkuran").length > 0) {
        $("#formUkuran").validate({
            submitHandler: function (form) {
                var actionType = $('#btnSaveUkuran').val();
                $('#btnSaveUkuran').html('Sending..');
                $.ajax({
                    data: $('#formUkuran').serialize(),
                    url: "{{ route('ukuran.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#formUkuran').trigger("reset");
                        $('#ukuranModal').modal('hide');
                        $('#btnSaveUkuran').html('Save Changes Kendaraan');
                        var oTable = $('#ukuran').dataTable();
                        oTable.fnDraw(false);
                        Toast.fire({
                            icon: 'success',
                            title: 'Data Berhasil Di Simpan.'
                        })
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#btnSaveUkuran').html('Save Changes');
                    }
                });
            }
        });
    }

    $('body').on('click', '.delUkuran', function () {
        var ukuran_id = $(this).data("id");
            console.log(ukuran_id)
        Swal.fire({
            title: 'Apa Kamu yakin?',
            text: "Ingin Menghapus Data Ini??",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, do it!',
        }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
            type: "delete",
            url: ukuran_id +'/'+ "destroy",
                success: function (data) {
                var oTable = $('#ukuran').dataTable();
                // $('table.reload').DataTable().ajax.reload();
                oTable.fnDraw(false);
                Toast.fire({
                    icon: 'success',
                    title: 'Data Berhasil Di Hapus.'
                            })
                },
                error: function (data) {
                    console.log('Error:', data);
                }
        });
        }
        })
      });
    </script>
@endsection
