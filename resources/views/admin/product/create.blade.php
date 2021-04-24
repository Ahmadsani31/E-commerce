@extends('admin.layouts.app')

@section('content')
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
                                                <input type="text" id="warna" name="warna" class="form-control" required>
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
                                                            @foreach ($cat as $key => $item)
                                                            <option value="{{ $key }}">{{ $item }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <select id="idSubCat" name="idSubCat" class="form-control custom-select" style="width: 100%;" required>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Type Baju</label>
                                                        <select id="idType" name="idType" class="form-control custom-select" style="width: 100%;" required>
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
                                              <h3 class="card-title">Upload image your product</h3>
                                            </div>
                                            <form action="{{ route('product.storeImage') }}" class="dropzone"  id="my-dropzone">
                                                @csrf
                                                <input type="hidden" class="data_id" name="data_id" id="data_id">
                                            </form>

                                          <!-- /.card -->
                                        </div>
                                      </div>
                                      <div class="float left">
                                        <button class="btn btn-info" onclick="stepper.previous()">Previous</button>
                                        <button type="submit" class="btn btn-success pr-2" id="submit-all">Complated Created Product</button>
                                      </div>
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

  <script type="text/javascript">

    $(document).ready(function(){
        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
        });
    });

    $(document).ready(function(){
        $('#rupiah').mask('#,##0', {reverse: true});
    })
  // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })


    $(document).ready(function () {
    	$('select[name="idCat"]').on('change', function () {
    		var ukuran_id = $(this).val();
    		$.ajax({
    			url: ukuran_id + '/selectCat',
    			type: "GET",
    			dataType: "json",
    			success: function (data) {
                    $('select[name="idUkuran[]"]').empty();
                    $('select[name="idType"]').empty();
    				$('select[name="idSubCat"]').empty();
    				if (data == '') {
    					$('#idSubCat').append('<option disabled selected>--Data Tidak Ada--</option>');
    				} else {
    					$('#idSubCat').append('<option disabled selected>--Select One--</option>');
    				}
    				$.each(data, function (key, value) {
    					$('select[name="idSubCat"]').append('<option value="' + key + '">' + value + '</option>');
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
                        console.log(data)
                    $('select[name="idUkuran[]"]').empty();
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
        $('select[name="idType"]').on('change', function(){
            var ukuran_id = $(this).val();
                $.ajax({
                    url: ukuran_id + '/selectType',
                    type:"GET",
                    dataType:"json",
                    success:function(data){
                        // console.log(data[0].type_id);
                    $('select[name="idUkuran[]"]').empty();
                    if(data == ''){
                        $('#idUkuran').append('<option disabled selected>--Data Tidak Ada--</option>');
                            }else{
                        $('#idUkuran').append('<option disabled selected>--Select One--</option>');
                            }
                        $('#ukur').val(data[0].type_id);
                        $.each(data, function(key, value){
                            $('select[name="idUkuran[]"]').append('<option value="'+ value.id +'">'+ value.size +'</option>');
                        });
                    }
                });
        });

    });


    $(document).ready(function () {
	var maxField = 5; //Input fields increment limitation
	var addButton = $('.add_field_product'); //Add button selector
	var wrapper = $('.field_product'); //Input field wrapper
	var x = 1; //Initial field counter is 1
	//Once add button is clicked
	$(addButton).click(function () {
		//Check maximum number of input fields
		if (x < maxField) {
			x++; //Increment field counter
			$('body').on('click', '#ukur', function () {
				var id = $(this).val();
				console.log(id);
				$.ajax({
					url: id + '/show',
					type: "GET",
					dataType: "json",
					success: function (data) {
						$('#data' + x + '').empty();
						if (data == '') {
							$('#data' + x + '').append('<option disabled selected>--Data Tidak Ada--</option>');
						} else {
							$('#data' + x + '').append('<option disabled selected>--Select One--</option>');
						}
						$.each(data, function (key, value) {
							$('#data' + x + '').append('<option value="' + key + '">' + value + '</option>');
						});
					}
				});
			});
			$(wrapper).append('<div id="row' + x + '">'
                            + '<div class="form-group row">'
                            + '<div class="col-md-3">'
                            + '<label>Ukuran</label>'
                            + '<select id="data' + x + '" name="idUkuran[]" class="form-control custom-select" required>'
                            + '<option selected disabled>Select one</option>'
                            + '</select>'
                            + '</div>'
                            + '<div class="col-md-5">'
                            + '<label>Harga</label>'
                            + '<div class="input-group">' + '<div class="input-group-prepend">' + '<span class="input-group-text">Rp.</span>' + '</div>'
                            + '<input type="text" id="rupiah' + x + '" name="harga[]" class="form-control" required>'
                            + '<div class="input-group-append">' + '<span class="input-group-text">.00</span>'
                            + '</div>'
                            + '</div>'
                            + '</div>'
                            + '<div class="col-md-3">'
                            + '<label>Stock</label>'
                            + '<div class="input-group">'
                            + '<input type="text" name="stock[]" class="form-control" required>'
                            + '<div class="input-group-append">' + '<span class="input-group-text">Qty</span>'
                            + '</div>'
                            + '</div>'
                            + '</div>'
                            + '<div class="col-md-1 pt-4">'
                            + '<button type="button" id="' + x + '" class="btn btn-danger btn-sm mt-2 remove_field_product">'
                            + '<i class="fa fa-minus"></i>'
                            + '</button>'
                            + '</div>'
                            + '</div>'
                            + '</div>'); //Add field html
			$('#rupiah' + x + '').mask('#,##0', {
				reverse: true
			});
		}
	});
	//Once remove button is clicked
	$(wrapper).on('click', '.remove_field_product', function (e) {
		var button_id = $(this).attr("id");
		$('#row' + button_id + '').remove();
		// e.preventDefault();
		// $(this).parent('div').remove(); //Remove field html
		x--; //Decrement field counter
	});
});


$(document).ready(function () {
	$('#summernote').summernote({
		placeholder: 'Description Your Product',
		tabsize: 2,
		height: 250,
		toolbar: [
			['style', ['style']],
			['font', ['bold', 'underline', 'clear']],
			['fontname', ['fontname']],
			['color', ['color']],
			['para', ['ul', 'ol', 'paragraph']],
			['table', ['table']],
			['view', ['fullscreen', 'codeview', 'help']]
		]
	});
});

$(document).ready(function () {
	$('#btnSaveProduct').click(function () {
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
							console.log(data.id);
							$('#formProduct').trigger("reset");
							$('#btnSaveProduct').html('Save Changes');
							$('#data_id').val(data.id);
							stepper.next()
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

Dropzone.options.myDropzone = {
	renameFile: function (file) {
		var dt = new Date();
		var time = dt.getTime();
		return 'product-' + time + file.name;
	},
	maxFilesize: 5, //mb- Image files not above this size
	uploadMultiple: true, // set to true to allow multiple image uploads
	parallelUploads: 15, //all images should upload same time
	maxFiles: 15, //number of images a user should upload at an instance
	acceptedFiles: ".jpeg,.jpg,.png,.gif", //allowed file types, .pdf or anyother would throw error
	addRemoveLinks: true, // add a remove link underneath each image to
	autoProcessQueue: false, // Prevents Dropzone from uploading dropped files immediately
    timeout: 180000,
	removedfile: function (file) {
		var name = file.upload.filename;
		$.ajax({
			type: 'POST',
			url: '{{ route('product.deleteImage')}}',
			data: {
				filename: name
			},
			success: function (data) {
				load_images();
				console.log(data);
			},
			error: function (e) {
				console.log(e);
			}
		});
		var fileRef;
		return (fileRef = file.previewElement) != null ? fileRef.parentNode.removeChild(file.previewElement) : void 0;
	},
	init: function () {
		var submitButton = document.querySelector("#submit-all")
		myDropzone = this; // closure
		submitButton.addEventListener("click", function () {
			myDropzone.processQueue(); // Tell Dropzone to process all queued files.
            setTimeout(function() {
                window.location.href = "{{ route('product.index') }}";
            }, 1500);

		});
		// You might want to show the submit button only when
		// files are dropped here:
		this.on("addedfile", function () {
			// Show submit button here and/or inform user to click it.
		});
	}
};

</script>
@endsection
