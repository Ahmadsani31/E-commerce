@extends('layouts.master')
@section('homepage')
<main class="container">

	<section>

		<div class="signuppanel">

			<div class="row">

				<div class="col-md-6">

					<div class="signup-info">
						<div class="logopanel">
							<h1><span>[</span> Ecommerce <span>]</span></h1>
						</div><!-- logopanel -->

						<div class="mb20"></div>

						<h5><strong>Bootstrap 3 Ecommerce Template!</strong></h5>
						<p>Lookcare is a great theme that is perfect any browser.</p>
						<p>Below are some of the benefits you can have when purchasing this template.</p>
						<div class="mb20"></div>

						<div class="feat-list">
							<i class="fa fa-wrench"></i>
							<h4 class="text-success">Easy to Customize</h4>
							<p>Lookcare is made using Bootstrap 3 so you can easily customize any element of this template following the structure of Bootstrap 3.</p>
						</div>

						<div class="feat-list">
							<i class="fa fa-compress"></i>
							<h4 class="text-success">Fully Responsive Layout</h4>
							<p>Lookcare is design to fit on all browser widths and all resolutions on all mobile devices. Try to scale your browser and see the results.</p>
						</div>

						<h4 class="mb20">and much more...</h4>

					</div><!-- signup-info -->

				</div><!-- col-sm-6 -->

				<div class="col-md-6">

					<form method="post" action="{{ route('singupStore') }}" enctype="multipart/form-data">
                        @csrf
                        @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <strong>Something it's wrong!</strong> You should check in on some of those fields below.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                          </div>
                        @endif
						<h3 class="nomargin">Sign Up</h3>
						<p class="mt5 mb20">Already a member? <a href="{{ route('singin') }}"><strong>Sign In</strong></a></p>


						<div class="mb10">
							<label class="control-label">Username</label>
							<input type="text" name="username" class="form-control" />
						</div>

						<div class="mb10">
							<label class="control-label">Password</label>
							<input type="password" name="password" class="form-control" />
						</div>
                        <div class="mb10">
							<label class="control-label">Retype Password</label>
                            <input type="password" class="form-control" @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" data-eye>
						</div>
                        <hr>
                        <div class="mb10">
                            <label class="control-label">Name</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                        <div class="mb10">
							<label class="control-label">Email Address</label>
							<input type="email" name="email" class="form-control" />
						</div>
                        <div class="mb10">
							<label class="control-label">No Telepon</label>
							<input type="number" name="nope" class="form-control" />
						</div>
                        <div class="mb10">
                            <label class="control-label">Birthday</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" name="birthday" class="form-control">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>


						<br />

						<button type="submit" class="btn btn-success btn-block">Sign Up</button>
					</form>
				</div><!-- col-sm-6 -->

			</div><!-- row -->



		</div><!-- signuppanel -->

	</section>
</main>

<!-- date-range-picker -->
<script src="{{ asset('frontend/js/vendor/jquery-1.10.2.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>
<script>
    $('.datepicker').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: "yyyy-mm-dd",
    });
</script>
@endsection
