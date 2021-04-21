@extends('layouts.master')
@section('homepage')
<main class="container">

	<section>

		<div class="signuppanel">

			<div class="row">

				<div class="col-md-6">

					<div class="signup-info">
						<div class="logopanel">
							<h1><span>[</span> Lookcare <span>]</span></h1>
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

						<label class="control-label">Name</label>
						<div class="mb10">
								<input type="text" name="nama" class="form-control" />
						</div>
						<div class="mb10">
							<label class="control-label">Username</label>
							<input type="text" name="username" class="form-control" />
						</div>

						<div class="mb10">
							<label class="control-label">Password</label>
							<input type="password" name="password" class="form-control" />
						</div>
						<label class="control-label">Birthday</label>
						<div class="row mb10">
							<div class="col-sm-5">
								<select class="form-control chosen-select" name="bulan" data-placeholder="Month">
									<option selected disabled>Select Month</option>
                                    <option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								</select>
							</div>
							<div class="col-sm-3">
								<input type="text" name="hari" class="form-control" placeholder="Day" />
							</div>
							<div class="col-sm-4">
								<input type="text" name="tahun" class="form-control" placeholder="Year" />
							</div>
						</div>

						<div class="mb10">
							<label class="control-label">Email Address</label>
							<input type="email" name="email" class="form-control" />
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

@endsection
