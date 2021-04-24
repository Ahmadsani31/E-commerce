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

    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card card-navy">
                <div class="card-header">
                  <h3 class="card-title">Responsive Hover Table</h3>

                  <div class="card-tools">
                      <a href="{{ route('product.create') }}" class="btn btn-success btn-sm">New Product</a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-hover text-nowrap" id="product">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>image</th>
                        <th>Category</th>
                        <th>Nama</th>
                        <th>Ukuran</th>
                        <th>Harga</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th>Barcode</th>
                        <th>Act</th>
                      </tr>
                    </thead>
                    <tbody class="">

                    </tbody>
                  </table>
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

@if (Session::has('success'))
    <script>
        Swal.fire("Wellcome {{ Auth::user()->name }}","{!! Session::get("success") !!}","success",{
          timer: 1500,
        });
    </script>
@endif
  <script type="text/javascript">

    $(document).ready(function(){
        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
        });
    });

      // BS-Stepper Init
      document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    $(document).ready(function(){
        $('#product').DataTable({
            processing: true,
            serverSide: true,
            "responsive": true,
                ajax: {
                url:"{{ route('product.index') }}",
                type: 'GET',
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable:false},
                    {data: 'img', name: 'img',render:function(data, type, full, meta)
                        {
                        return "<img src={{ URL::to('/') }}/images/product/" + data +" width='100' class='img-thumbnail' />";
                        },orderable: false
                    },
                    {data: 'category', name: 'category'},
                    {data: 'nama', name: 'nama'},
                    {data: 'ukuran', name: 'ukuran'},
                    {data: 'harga', name: 'harga'},
                    {data: 'stock', name: 'stock'},
                    {data: 'status', name: 'status'},
                    {data: 'barcode', name: 'barcode'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    ],
                order: [[0, 'desc']]
        });
    });

  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })



    $('body').on('click', '.show', function () {
            var id = $(this).data('id');
             console.log(id);
             $.ajax({
                    url: id +'/edit',
                    type:"GET",
                    dataType:"json",
                    success:function(data){
                        window.location.href = "{{ url('admin.product.edit') }}";
                    }
                });

        });

        $('body').on('click', '.editProduct', function () {
            var id = $(this).data('id');
             console.log(id);

                        $('#categoryModalLabel').html("Detail Product");
                        $('#categoryModal').modal('show');

                        $('div.data').html(data.table_data);
                        $('#nama').text(data.nama);
                        $('#des').text(data.des);



        });

        $('body').on('click', '#delProduct', function () {
        var id_product = $(this).data("id");
            console.log(id_product)
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
            url: id_product +'/'+ "destroy",
                success: function (data) {
                var oTable = $('#product').dataTable();
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

    </script>
@endsection
