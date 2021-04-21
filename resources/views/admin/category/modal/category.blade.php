<div class="modal fade" id="categoryModal">
    <div class="modal-dialog modal-default">
      <div class="modal-content">
          <form action="#" id="formCategory" name="formCategory">
        <div class="modal-header">
          <h4 class="modal-title" id="categoryModalLabel"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group row">
                <div class="col-md-11">
                    <label>Nama Category</label>
                    <input type="text" id="nameCategory" name="nameCategory[]" class="form-control"  placeholder="Enter name" required>
                </div>
                <div class="col-md-1 pt-4">
                    <button type="button" class="btn btn-info btn-sm mt-2 add_field_cat">
                        <i class="fa fa-plus"></i>
                      </button>
                </div>
            </div>
            <div class="field_category"></div>
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
  <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

  <script>

      $('#btnAddCategory').click(function () {
        $('#btnSaveCategory').val("create-data");
        $('#id').val('');
        $('.field_category').html("");
        $('#formCategory').trigger("reset");
        $('#categoryModalLabel').html("Create Category");
        $('#categoryModal').modal('show');
    });
    $(document).ready(function(){
        var maxField = 5; //Input fields increment limitation
        var addButton = $('.add_field_cat'); //Add button selector
        var wrapper = $('.field_category'); //Input field wrapper
        var x = 1; //Initial field counter is 1


        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(  '<div class="form-group row"  id="row'+x+'">'+
                                    '<input type="hidden" name="idKendaraan">'+
                                    '<div class="col-md-11">'+
                                            '<input type="text" id="nameCategory" name="nameCategory[]" class="form-control" placeholder="Enter name">'+
                                    '</div>'+
                                    '<div class="col-1">'+
                                        '<button type="button" id="'+x+'"  class="btn btn-danger btn-sm mt-1 remove_field_cat"><i class="fa fa-minus"></i>'+
                                        '</button>'+
                                    '</div>'+
                                    '</div>'); //Add field html
            }
        });
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_field_cat', function(e){
            var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
            // e.preventDefault();
            // $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });


    if ($("#formCategory").length > 0) {
        $("#formCategory").validate({
            submitHandler: function (form) {
                var actionType = $('#btnSaveCategory').val();
                $('#btnSaveCategory').html('Sending..');
                $.ajax({
                    data: $('#formCategory').serialize(),
                    url: "{{ route('category.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#formCategory').trigger("reset");
                        $('#categoryModal').modal('hide');
                        $('#btnSaveCategory').html('Save Changes');
                        window.location.reload();
                        var oTable = $('#cat').dataTable();
                        oTable.fnDraw(false);
                        Toast.fire({
                            icon: 'success',
                            title: 'Data Berhasil Di Simpan.'
                        })
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#btnSaveCategory').html('Save Changes...');
                    }
                });
            }
        });
    }

    $('body').on('click', '.delCat', function () {
        var cat = $(this).data("id");
            console.log(cat)
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
            url: cat +'/'+ "destroy",
                success: function (data) {
                var oTable = $('#cat').dataTable();
                $('table.reload').DataTable().ajax.reload();
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
