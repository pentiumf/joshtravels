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

					</div>

				  <div class="form-grup">

						{!! Form::label('price', 'Price') !!}
						{!! Form::text('price', null, ['class' => 'form-control']) !!}

					</div>

				  <div class="form-grup">

						{!! Form::label('destination', 'Destination') !!}
						{!! Form::text('destination', null, ['class' => 'form-control']) !!}

					</div>

				  <div class="form-grup">

						{!! Form::label('overview', 'Overview') !!}
						{!! Form::textarea('overview', null, ['class' => 'form-control']) !!}

					</div>

					<div class="form-grup">

						{!! Form::label('description', 'Description') !!}
						{!! Form::textarea('description', null, ['class' => 'form-control']) !!}

					</div>
				</div>

				<div class="admin-form-content-right">

				  <div class="form-grup">

						{!! Form::label('duration', 'Duration') !!}
						{!! Form::text('duration', null, ['class' => 'form-control']) !!}

					</div>

				  <div class="form-grup">

						{!! Form::label('depature_date', 'Depature Date') !!}
						{!! Form::text('depature_date', null, ['class' => 'form-control']) !!}

					</div>


				  <div class="form-grup">

						{!! Form::label('end_date', 'End Date') !!}
						{!! Form::text('end_date', null, ['class' => 'form-control']) !!}

					</div>

				  <div class="form-grup">

						{!! Form::label('photo', 'Cover Photo') !!}
						{!! Form::file('photo', null) !!}

					</div>
				</div>

				<div class="admin-form-content-bootom">
					<div class="form-group">

						{!! Form::submit('Edit Package', ['class' => 'btn']) !!}

					</div>
				</div>

				{!! Form::close() !!}


			  {!! Form::open(['method' => 'DELETE', 'action' => ['AdminPackageContoller@destroy', $package->id]]) !!}

				<div class="form-group">

					{!! Form::submit('Delete Package', ['class' => 'btn btn-danger']) !!}

				</div>

				{!! Form::close() !!}

			</div>
		</div>

	</div>

@include('includes.inputErrors')


@stop
