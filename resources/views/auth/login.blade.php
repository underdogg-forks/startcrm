@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif


    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">

					<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
              <div class="form-label-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="inputEmail" class="form-control" name="email" value="{{ old('email') }}">
							</div>
              </div>
						</div>

						<div class="form-group">
              <div class="form-label-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="inputPassword" class="form-control" name="password">
							</div>
              </div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="rememberme"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Login
								</button>

								<a href="/password/email">Forgot Your Password?</a>
							</div>
						</div>
					</form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
