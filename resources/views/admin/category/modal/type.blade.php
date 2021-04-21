<div class="modal fade" id="typeModal">
    <div class="modal-dialog modal-default">
      <div class="modal-content">
          <form action="#" id="formType" name="formType">
        <div class="modal-header">
          <h4 class="modal-title" id="typeModalLabel"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label>Category</label>
                      <select id="idCat1" name="idCat1" class="form-control" style="width: 100%;" required>
                        <option selected disabled>--Chosee--</option>

                        @foreach ($cat as $key => $item)
                        <option value="{{ $key }}">{{ $item }}</option>

                        @endforeach

                      </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label>Sub Category</label>
                      <select id="idSubCat" name="idSubCat" class="form-control" style="width: 100%;" required>
                        <option selected disabled>--Chosee--</option>
                      </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-11">
                    <label>Category Type</label>
                    <input type="text" id="typeNama" name="typeNama[]" class="form-control"  placeholder="Enter name" required>
                </div>
                <div class="col-md-1 pt-4">
                    <button type="button" class="btn btn-info btn-sm mt-2 add_field_type">
                        <i class="fa fa-plus"></i>
                      </button>
                </div>
            </div>
            </div>
            <div class="field_type"></div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" id="btnSaveType" class="btn btn-primary">Submit</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
  <script>
      $('#btnAddType').click(function () {
        $('#btnSaveType').val("create-data");
        $('#id').val('');
        $('.field_type').html("");
        $('#formType').trigger("reset");
        $('#typeModalLabel').html("Create Category");
        $('#typeModal').modal('show');

    });

    $(document).ready(function(){
        $('select[name="idCat1"]').on('change', function(){
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
        var maxField = 5; //Input fields increment limitation
        var addButton = $('.add_field_type'); //Add button selector
        var wrapper = $('.field_type'); //Input field wrapper
        var x = 1; //Initial field counter is 1


        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(  '<div class="form-group"  id="row'+x+'">'+
                                    '<div class="row">'+
                                        '<div class="col-md-11">'+
                                            '<input type="text" id="typeNama" name="typeNama[]" class="form-control"  placeholder="Enter name" required>'+
                                        '</div>'+
                                    '<div class="col-md-1">'+
                                        '<button type="button" id="'+x+'" class="btn btn-danger btn-sm mt-1 remove_field_type">'+
                                            '<i class="fa fa-minus"></i>'+
                                        '</button>'+
                                    '</div>'+
                                    '</div>'+
                                    '</div>'); //Add field html
            }
        });
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_field_type', function(e){
            var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
            // e.preventDefault();
            // $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });

    if ($("#formType").length > 0) {
        $("#formType").validate({
            submitHandler: function (form) {
                var actionType = $('#btnSaveType').val();
                $('#btnSaveType').html('Sending..');
                $.ajax({
                    data: $('#formType').serialize(),
                    url: "{{ route('type.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#formType').trigger("reset");
                        $('#typeModal').modal('hide');
                        $('#btnSaveType').html('Save Changes');
                        var oTable = $('#type').dataTable();
                        oTable.fnDraw(false);
                        Toast.fire({
                            icon: 'success',
                            title: 'Data Berhasil Di Simpan.'
                        })
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#btnSaveType').html('Save Changes...');
                    }
                });
            }
        });
    }

    $('body').on('click', '.delType', function () {
        var type_id = $(this).data("id");
            console.log(type_id)
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
            url: type_id +'/'+ "typeDestroy",
                success: function (data) {
                var oTable = $('#type').dataTable();
                // $('table.reload').DataTable().ajax.reload();
                oTable.fnDraw(false);
                Toast.fire({
                    icon: 'success',
                    title: 'Data Berhasil Di Simpan.'
                    })
                },
                error: function (data) {
                    console.log('Error:', data);
                }
        });
        }
        })
      });
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  </script>
