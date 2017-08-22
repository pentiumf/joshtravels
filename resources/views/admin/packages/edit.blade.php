@extends('layouts.admin')

@section('content')

	<div class="admin-content-wrapper">

		<div class="admin-form-wrapper">
			<div class="admin-form-header">
				<h1>Edit Package</h1>
			</div>

			<div id="EditPackageAdmin" class="admin-form-content clearfix">

				{!! Form::model($package, ['method' => 'PATCH', 'action' => ['AdminPackageContoller@update', $package->id], 'files' => true]) !!}

				<div class="admin-form-content-left">
					<div class="form-grup">

						{!! Form::label('name', 'Name') !!}
						{!! Form::text('name', null, ['class' => 'form-control']) !!}

						@if ($errors->has('name'))
		            <span>
		                <strong>{{ $errors->first('name') }}</strong>
		            </span>
		        @endif

					</div>

				  <div class="form-grup">

						{!! Form::label('price', 'Price') !!}
						{!! Form::text('price', null, ['class' => 'form-control']) !!}

						@if ($errors->has('price'))
		            <span>
		                <strong>{{ $errors->first('price') }}</strong>
		            </span>
		        @endif

					</div>

				  <div class="form-grup">

						{!! Form::label('destination', 'Destination') !!}
						{!! Form::text('destination', null, ['class' => 'form-control']) !!}

						@if ($errors->has('destination'))
		            <span>
		                <strong>{{ $errors->first('destination') }}</strong>
		            </span>
		        @endif

					</div>

				  <div class="form-grup">

						{!! Form::label('overview', 'Overview') !!}
						{!! Form::textarea('overview', null, ['class' => 'form-control']) !!}

						@if ($errors->has('overview'))
		            <span>
		                <strong>{{ $errors->first('overview') }}</strong>
		            </span>
		        @endif

					</div>

					<div class="form-grup">

						{!! Form::label('description', 'Description') !!}
						{!! Form::textarea('description', null, ['class' => 'form-control']) !!}

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
						{!! Form::text('duration', null, ['class' => 'form-control']) !!}

						@if ($errors->has('duration'))
		            <span>
		                <strong>{{ $errors->first('duration') }}</strong>
		            </span>
		        @endif

					</div>

				  <div class="form-grup">

						{!! Form::label('depature_date', 'Depature Date') !!}
						{!! Form::text('depature_date', null, ['class' => 'form-control']) !!}

						@if ($errors->has('depature_date'))
		            <span>
		                <strong>{{ $errors->first('depature_date') }}</strong>
		            </span>
		        @endif

					</div>


				  <div class="form-grup">

						{!! Form::label('end_date', 'End Date') !!}
						{!! Form::text('end_date', null, ['class' => 'form-control']) !!}

						@if ($errors->has('end_date'))
		            <span>
		                <strong>{{ $errors->first('end_date') }}</strong>
		            </span>
		        @endif

					</div>

				  <div class="form-grup">

						<div class="admin-file-upload">
                  <label>Photo </label>
                  <div class="proProfilePicWrapper">
                      <div id="editProfileImageUploadId" class="profile-image-upload-dflt">
                          <!-- <i id="profile-edit-icon" class="fa fa-picture-o"></i> -->
                          <img id="profilePreview" class="proProfilePicImage" src="{{$package->photo}}"/>
                      </div>
                  </div>
                  <div id="profile-pic-edit-btn" class="fileUpload">
                      <span class="file-upload-label"> <i class="fa fa-upload" aria-hidden="true"></i>change</span>
                      <input type="file" id="profileImg" class="upload" name="photo"/>
                  </div>
              </div>

						<!-- {!! Form::label('photo', 'Cover Photo') !!}
						{!! Form::file('photo', null) !!} -->

					</div>
				</div>

				<div class="admin-form-content-bootom">
					<div class="form-group">

						{!! Form::submit('Edit Package', ['class' => 'btn']) !!}

					</div>
				</div>

				{!! Form::close() !!}

				<div class="top-admin-delete-btn">
					{!! Form::open(['method' => 'DELETE', 'action' => ['AdminPackageContoller@destroy', $package->id]]) !!}

					<div class="form-group">

						{!! Form::submit('Delete Package', ['class' => 'btn btn-danger']) !!}

					</div>

					{!! Form::close() !!}
				</div>

			</div>
		</div>

	</div>


@stop
