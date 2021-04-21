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
            <div class="col-6">
              <div class="card card-navy">
                <div class="card-header">
                  <h3 class="card-title"> Category</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-block btn-default btn-sm" id="btnAddCategory">Add Data</button>
                  </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-hover text-nowrap reload" id="cat">
                    <thead>
                      <tr>
                        <th width="10">No</th>
                        <th>Category</th>
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
            <div class="col-6">
                <div class="card card-navy">
                  <div class="card-header">
                    <h3 class="card-title">Sub Category</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-block btn-default btn-sm" id="btnAddCatBaju">Add Data</button>
                      </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive">
                    <table class="table table-hover text-nowrap reload" id="catBaju">
                      <thead>
                        <tr>
                          <th>ID</th>
                        <th>Category</th>
                          <th>User</th>
                          <th>Action</th>
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
          <div class="row">
            <div class="col-12">
              <div class="card card-navy">
                <div class="card-header">
                  <h3 class="card-title"> Type Baju</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-block btn-default btn-sm" id="btnAddType">Add Data</button>
                  </div>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                  <table class="table table-hover text-nowrap reload" id="type">
                    <thead>
                      <tr>
                        <th width="10">No</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Type Category</th>
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
@include('admin.category.modal.category')
@include('admin.category.modal.subCategory')
@include('admin.category.modal.type')
      <!-- /.modal -->
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
        $('#cat').DataTable({
            processing: true,
            serverSide: true,
            "responsive": true,
                ajax: {
                url:"{{ route('category.datatable') }}",
                type: 'GET',
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable:false},
                    {data: 'category_nama', name: 'category_nama'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    ],
                order: [[0, 'desc']]
        });
    });

    $(document).ready(function(){
        $('#catBaju').DataTable({
            processing: true,
            serverSide: true,
            "responsive": true,
                ajax: {
                url:"{{ route('category.subDatatable') }}",
                type: 'GET',
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable:false},
                    {data: 'category', name: 'category'},
                    {data: 'sub_category_nama', name: 'sub_category_nama'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    ],
                order: [[0, 'desc']]
        });
    });

    $(document).ready(function(){
        $('#type').DataTable({
            processing: true,
            serverSide: true,
            "responsive": true,
                ajax: {
                url:"{{ route('type.datatable') }}",
                type: 'GET',
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable:false},
                    {data: 'category', name: 'category'},
                    {data: 'subCategory', name: 'subCategory'},
                    {data: 'type_nama', name: 'type_nama'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    ],
                order: [[0, 'desc']]
        });
    });

    </script>
@endsection
