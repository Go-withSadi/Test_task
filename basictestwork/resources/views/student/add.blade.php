@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="page-title">StudentsTutorial Add Form</h1>
	<div class="" style="margin-bottom:10px;margin-top:15px;">
	</div>
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				
				<div class="card-header">Add</div>
				<div class="card-body">
					@if (session('status'))
						<div class="alert alert-success" role="alert">
							<button type="button" class="close" data-dismiss="alert">×</button>
							{{ session('status') }}
						</div>
					@elseif(session('failed'))
						<div class="alert alert-danger" role="alert">
							<button type="button" class="close" data-dismiss="alert">×</button>
							{{ session('failed') }}
						</div>
					@endif
					<form method="POST" action="{{ url('create') }}" class="needs-validation" novalidate>
						@csrf
						<div class="form-group">
							<label>First Name:</label>
							<input type="text" name="first_name" id="first_name" class=" form-control col-sm-6 @error('first_name') is-invalid @enderror" placeholder="First Name" value="{{ old('first_name') }}" required />
							@error('first_name')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror
						  
						</div>
						<div class="form-group">
							<label>Last Name:</label>
							<input type="text" name="last_name" id="last_name" class=" form-control col-sm-6 @error('last_name') is-invalid @enderror" placeholder="Last Name" value="{{ old('last_name') }}" required />
							@error('last_name')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror
						  
						</div>
						<div class="form-group">
							<label>Email:</label>
							<input type="email" name="email" id="email_id" class="form-control col-sm-6 @error('email') is-invalid @enderror" placeholder="Email Id" value="{{ old('email') }}" required / >
							@error('email')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror
						</div>
						<div class="form-group">
							<label>City:</label>
							<select name="city_name" id="city_name" class=" form-control col-sm-6 @error('city') is-invalid @enderror" required>
								<option value="delhi">Delhi</option>
								<option value="mumbai">Mumbai</option>
								<option value="kolkata">Kolkata</option>
								<option value="chennai">Chennai</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Save</button>
					  </form>				   
				</div>
			</div>
		</div>
	</div>
</div>
@endsection