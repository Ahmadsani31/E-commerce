<div class="modal fade" id="catBajuModal">
    <div class="modal-dialog modal-default">
      <div class="modal-content">
          <form action="#" id="formCatBaju" name="formCatBaju">
        <div class="modal-header">
          <h4 class="modal-title" id="catBajuModalLabel"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group row">
                <div class="col-md-5">
                    <div class="form-group">
                      <label>Minimal</label>
                      <select id="idCat" name="idCat" class="form-control" style="width: 100%;" required>
                        <option selected disabled>--Chosee--</option>

                        @foreach ($cat as $key => $item)
                        <option value="{{ $key }}">{{ $item }}</option>

                        @endforeach

                      </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <label>Nama Category</label>
                    <input type="text" id="nameCatBaju" name="nameCatBaju[]" class="form-control"  placeholder="Enter name" required>
                </div>
                <div class="col-md-1 pt-4">
                    <button type="button" class="btn btn-info btn-sm mt-2 add_field_sub">
                        <i class="fa fa-plus"></i>
                      </button>
                </div>
            </div>
            <div class="field_sub"></div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" id="btnSaveCatBaju" class="btn btn-primary">Submit</button>
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
      $('#btnAddCatBaju').click(function () {
        $('#btnSaveCatBaju').val("create-data");
        $('#id').val('');
        $('.field_sub').html("");
        $('#formCatBaju').trigger("reset");
        $('#catBajuModalLabel').html("Create Category");
        $('#catBajuModal').modal('show');

    });
    $(document).ready(function(){
        var maxField = 5; //Input fields increment limitation
        var addButton = $('.add_field_sub'); //Add button selector
        var wrapper = $('.field_sub'); //Input field wrapper
        var x = 1; //Initial field counter is 1


        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(  '<div class="form-group row"  id="row'+x+'">'+
                                    '<input type="hidden" name="idKendaraan">'+
                                    '<div class="col-md-5">'+
                                    '</div>'+
                                    '<div class="col-md-6">'+
                                            '<input type="text" id="nameCatBaju" name="nameCatBaju[]" class="form-control" placeholder="Enter name">'+
                                    '</div>'+
                                    '<div class="col-1">'+
                                        '<button type="button" id="'+x+'"  class="btn btn-danger btn-sm mt-1 remove_field_sub"><i class="fa fa-minus"></i>'+
                                        '</button>'+
                                    '</div>'+
                                    '</div>'); //Add field html
            }
        });
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_field_sub', function(e){
            var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
            // e.preventDefault();
            // $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });

    if ($("#formCatBaju").length > 0) {
        $("#formCatBaju").validate({
            submitHandler: function (form) {
                var actionType = $('#btnSaveCatBaju').val();
                $('#btnSaveCatBaju').html('Sending..');
                $.ajax({
                    data: $('#formCatBaju').serialize(),
                    url: "{{ route('category.subStore') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#formCatBaju').trigger("reset");
                        $('#catBajuModal').modal('hide');
                        $('#btnSaveCatBaju').html('Save Changes');
                        var oTable = $('#catBaju').dataTable();
                        oTable.fnDraw(false);
                        Toast.fire({
                            icon: 'success',
                            title: 'Data Berhasil Di Simpan.'
                        })
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#btnSaveCatBaju').html('Save Changes...');
                    }
                });
            }
        });
    }

    $('body').on('click', '.delCatSub', function () {
        var catSub = $(this).data("id");
            console.log(catSub)
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
            url: catSub +'/'+ "subDestroy",
                success: function (data) {
                var oTable = $('#catBaju').dataTable();
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
