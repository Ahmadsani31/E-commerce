@extends('layouts.master')
@section('homepage')
<main class="container">

	<section>

		<div class="signinpanel">

			<div class="row">

				<div class="col-md-5 col-md-offset-1">

					<form method="post" action="{{ route('singinStore') }}" enctype="multipart/form-data">
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
						<h4 class="nomargin">Sign In</h4>
						<p class="mt5 mb20">Login to access your account.</p>

						<input type="text" name="username" @error('username') is-invalid @enderror" class="form-control uname" placeholder="Username" required/>
						<input type="password" name="password" class="form-control pword" placeholder="Password" required/>
						<a href="#"><small>Forgot Your Password?</small></a>
						<button type="submit" class="btn btn-success btn-block">Sign In</button>

					</form>
				</div><!-- col-sm-5 -->

				<div class="col-md-5 col-md-push-1">

					<div class="signin-info">
						<div class="logopanel">
							<h1><span>[</span> Ecommerce <span>]</span></h1>
						</div><!-- logopanel -->

						<div class="mb20"></div>

						<h5><strong>Welcome to Ecommerce Bootstrap 3 Template!</strong></h5>
						<ul>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> Fully Responsive Layout</li>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> HTML5/CSS3 Valid</li>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> Ecommerce Template</li>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> Easy Customize</li>
							<li><i class="fa fa-arrow-circle-o-right mr5"></i> and much more...</li>
						</ul>
						<div class="mb20"></div>
						<strong>Not a member? <a href="{{ route('singup') }}">Sign Up</a></strong>
					</div><!-- signin0-info -->

				</div><!-- col-sm-7 -->



			</div><!-- row -->


		</div><!-- signin -->

	</section>
</main>

@endsection
