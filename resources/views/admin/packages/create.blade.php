@extends('layouts.admin')

@section('content')


<div class="admin-content-wrapper">
	<div class="admin-form-wrapper">
		<div class="admin-form-header">
			<h1>Create A New Package</h1>
		</div>
		<div class="admin-form-content clearfix">
			{!! Form::open(['method' => 'POST', 'action' => 'AdminPackageContoller@store', 'files' => true]) !!}

			<div class="admin-form-content-left">
				<div class="form-grup">

					{!! Form::label('name', 'Full Name') !!}
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Full Name']) !!}

					@if ($errors->has('name'))
	            <span>
	                <strong>{{ $errors->first('name') }}</strong>
	            </span>
	        @endif

				</div>

			  <div class="form-grup">

					{!! Form::label('price', 'Price') !!}
					{!! Form::text('price', null, ['class' => 'form-control', 'placeholder'=>'Price']) !!}

					@if ($errors->has('price'))
	            <span>
	                <strong>{{ $errors->first('price') }}</strong>
	            </span>
	        @endif

				</div>

			  <div class="form-grup">

					{!! Form::label('destination', 'Destination') !!}
					{!! Form::text('destination', null, ['class' => 'form-control', 'placeholder'=>'Destination']) !!}

					@if ($errors->has('destination'))
	            <span>
	                <strong>{{ $errors->first('destination') }}</strong>
	            </span>
	        @endif

				</div>

			  <div class="form-grup">

					{!! Form::label('overview', 'Overview') !!}
					{!! Form::textarea('overview', null, ['class' => 'form-control', 'placeholder'=>'Overview']) !!}

					@if ($errors->has('overview'))
	            <span>
	                <strong>{{ $errors->first('overview') }}</strong>
	            </span>
	        @endif

				</div>

			  <div class="form-grup">

					{!! Form::label('description', 'Description') !!}
					{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder'=>'Description']) !!}

					@if ($errors->has('description'))
	            <span>
	                <strong>{{ $errors->first('description') }}</strong>
	            </span>
	        @endif

				</div>
			</div>

		  <div class="admin-form-content-right">
				<div class="form-grup">

					{!! Form::label('duration', 'Duration') !!}
					{!! Form::text('duration', null, ['class' => 'form-control', 'placeholder'=>'Duration']) !!}

					@if ($errors->has('duration'))
	            <span>
	                <strong>{{ $errors->first('duration') }}</strong>
	            </span>
	        @endif

				</div>

			  <div class="form-grup">

					{!! Form::label('depature_date', 'Depature Date') !!}
					{!! Form::text('depature_date', null, ['class' => 'form-control', 'placeholder'=>'Depature Date']) !!}

					@if ($errors->has('depature_date'))
	            <span>
	                <strong>{{ $errors->first('depature_date') }}</strong>
	            </span>
	        @endif

				</div>


			  <div class="form-grup">

					{!! Form::label('end_date', 'End Date') !!}
					{!! Form::text('end_date', null, ['class' => 'form-control', 'placeholder'=>'End Date']) !!}

					@if ($errors->has('end_date'))
	            <span>
	                <strong>{{ $errors->first('end_date') }}</strong>
	            </span>
	        @endif

				</div>


			  <div class="form-grup">

					<div class="admin-file-upload">
						<div class="proProfilePicWrapper">
	              <div id="createProfileImageUploadId" class="profile-image-upload-dflt">
	                  <i id="profile-upload-icon" class="fa fa-picture-o" aria-hidden="true"></i>
	                  <img id="CreateProfilePreview" class="proProfilePicImage" src=""/>
	              </div>
	          </div>
	          <div id="profile-pic-upload-btn" class="fileUpload">
	              <span id="package-file-upload-text" class="file-upload-label"> <i class="fa fa-upload" aria-hidden="true"></i>Upload</span>
	              <input type="file" id="createProfileImg" class="upload" name="photo"/>
	          </div>
	          <div id="remove-profile-pic" class="remove-upolad-pic">
	              <i class="fa fa-times"></i>
	              <span>Remove</span>
	          </div>
					</div>

					<!-- {!! Form::label('photo', 'Cover Photo') !!}
					{!! Form::file('photo', null) !!} -->

					@if ($errors->has('photo'))
	            <span>
	                <strong>{{ $errors->first('photo') }}</strong>
	            </span>
	        @endif

				</div>

		  </div>

			<div class="admin-form-content-bootom">
				<div class="form-group">

					{!! Form::submit('Create Package', ['class' => 'btn']) !!}

				</div>
			</div>

			{!! Form::close() !!}
		</div>
	</div>
</div>


@stop
