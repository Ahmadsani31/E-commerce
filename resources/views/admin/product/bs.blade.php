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
                        <li class="breadcrumb-item"><a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Simple Tables</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-navy">
                        <div class="card-header">
                            <h3 class="card-title">Form Product</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="bs-stepper">
                                <div class="bs-stepper-header" role="tablist">
                                    <!-- your steps here -->
                                    <div class="step" data-target="#input_product">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="input_product" id="input_product-trigger"> <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label">Input Data Product</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#upload_image">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="upload_image" id="upload_image-trigger"> <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">Upload Image Product</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bs-stepper-content">
                                    <!-- your steps content here -->
                                    <div id="input_product" class="content" role="tabpanel" aria-labelledby="input_product-trigger">
                                        <form method="POST" action="" name="formProduct" id="formProduct" enctype="multipart/form-data">
                                            @csrf
                                        <div class="form-group">
                                            <label for="inputName">Name Product</label>
                                            <input type="text" id="inputName" name="nama_product" class="form-control" required>
                                        </div>
                                        <div class="row">
                                            <div class="col md-6">
                                                <div class="form-group">
                                                    <label for="inputName">Bahan</label>
                                                    <input type="text" id="bahan" name="bahan" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col md-6">
                                                <div class="form-group">
                                                    <label for="inputName">Warna</label>
                                                    <input type="text" id="Warna" name="warna" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row pt-2">
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label>Gender</label>
                                                            <select id="idCat" name="idCat" class="form-control custom-select" style="width: 100%;" required>
                                                                <option selected disabled>Select one</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Category</label>
                                                            <select id="idSubCat" name="idSubCat" class="form-control custom-select" style="width: 100%;" required>
                                                                <option selected disabled>Select one</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Type Baju</label>
                                                            <select id="idType" name="idType" class="form-control custom-select" style="width: 100%;" required>
                                                                <option selected disabled>Select one</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card card-navy">
                                                    <div class="card-body">
                                                        <div class="form-group row" id="card_ukuran">
                                                            <div class="col-md-3">
                                                                <label for="inputStatus">Ukuran</label>
                                                                <select id="idUkuran" name="idUkuran[]" class="form-control custom-select" required>
                                                                    <option selected disabled>Select one</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label>Harga</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"> <span class="input-group-text">Rp.</span>
                                                                    </div>
                                                                    <input type="text" id="rupiah" name="harga[]" class="form-control" required>
                                                                    <div class="input-group-append"> <span class="input-group-text">.00</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <label>Stock</label>
                                                                <div class="input-group">
                                                                    <input type="text" name="stock[]" class="form-control" required>
                                                                    <div class="input-group-append"> <span class="input-group-text">Qty</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field_product"></div>
                                                        <div class="col-md-12 pt-1">
                                                            <button type="button" id="ukur" data-id="ukur" class="btn btn-info btn-sm btn-block add_field_product"> <i class="fa fa-plus"> ADD UKURAN</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDescription">Product Description</label>
                                            <textarea id="summernote" name="description" class="form-control" rows="10" required></textarea>
                                        </div>

                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card-body clearfix">
                                                        <div class=" callout-info  float-left">
                                                            <h6><i class="fas fa-info"></i> Note:</h6>
                                                            <i class="bg-warning">Pastikan Semua Data Sudah Di Isi Dengan Benar.</i>
                                                        </div>
                                                        <button type="submit" id="btnSaveProduct" class="btn btn-primary float-right mt-1">Next & Save Product</button>
                                                        <button type="submit" class="btn btn-warning float-right mt-1 mr-2">Exit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    <div id="upload_image" class="content" role="tabpanel" aria-labelledby="upload_image-trigger">
                                        <div class="row">
                                            <div class="col-md-12">
                                              <div class="card card-default">
                                                <div class="card-header">
                                                  <h3 class="card-title">Dropzone.js <small><em>jQuery File Upload</em> like look</small></h3>
                                                </div>
                                                <form action="{{ route('image.store') }}" enctype="multipart/form-data"  class="dropzone" id="dropzone">
                                                   @csrf
                                                <input type="hidden" class="userid" name="userid" id="userid" value="1">
                                                    <div class="fallback">
                                                      <input name="file" type="file" multiple />
                                                      <input type="file" id="rupiah" name="harga" class="form-control" value="12">
                                                    </div>
                                                  </form>
                                                  <button class="btn btn-primary" id="submit-all">Submit all files</button>
                                              <!-- /.card -->
                                            </div>
                                          </div>
                                        <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.js"></script>


<script>
$(document).ready(function() {

    $('#summernote').summernote({
        placeholder: 'Description Your Product',
        tabsize: 2,
        height: 250,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          [ 'fontname', [ 'fontname' ] ],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
});

$(document).ready(function() {
    $('#btnSaveProduct').click(function () {
        stepper.next()

    if ($("#formProduct").length > 0) {
        $("#formProduct").validate({
            submitHandler: function (form) {
                var actionType = $('#btnSaveProduct').val();
                $('#btnSaveProduct').html('Sending..');
                $.ajax({
                    data: $('#formProduct').serialize(),
                    url: "{{ route('product.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#formProduct').trigger("reset");
                        $('#btnSaveProduct').html('Save Changes');

                        Toast.fire({
                            icon: 'success',
                            title: 'Data Berhasil Di Simpan.'
                        })
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#btnSaveProduct').html('Save Changes...');
                    }
                });
            }
        });
    }

    });
});

Dropzone.options.dropzone =
         {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return 'product-'+time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 5000,
            autoProcessQueue: false, // Prevents Dropzone from uploading dropped files immediately
            removedfile: function(file)
            {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            },
                    type: 'POST',
                    url: '{{ route('image.delete')}}',
                    data: {filename: name},
                    success: function (data){
                        load_images();
                        console.log(data);
                    },
                    error: function(e) {
                        console.log(e);
                    }});
                    var fileRef;
                    return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            init: function() {
                var submitButton = document.querySelector("#submit-all")
                    myDropzone = this; // closure

                    submitButton.addEventListener("click", function() {
                myDropzone.processQueue(); // Tell Dropzone to process all queued files.
                });

                // You might want to show the submit button only when
                // files are dropped here:
                this.on("addedfile", function() {
                // Show submit button here and/or inform user to click it.
                });


            },
            success: function(file, response)
            {
                load_images();
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
};

load_images();

  function load_images()
  {
    $.ajax({
      url:"{{ route('image.view') }}",
      success:function(data)
      {
        $('#uploaded_image').html(data);
      }
    })
  }


</script>
@endsection
