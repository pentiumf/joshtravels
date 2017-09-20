@extends('layouts.admin')

@section('content')


<div class="admin-content-wrapper">
 <div class="admin-form-wrapper">
   <div class="admin-form-header">
     <h1>Edit Staff</h1>
   </div>
   <div class="admin-form-content clearfix">
     {!! Form::model($staff, ['method' => 'PATCH', 'action' => ['StaffController@update', $staff->id],'files' => true]) !!}

     <div class="admin-form-content-left">

       <div class="form-grup">

         {!! Form::label('name', 'Name of Staff') !!}
         {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Name of Staff']) !!}

         @if ($errors->has('name'))
             <span>
                 <strong>{{ $errors->first('name') }}</strong>
             </span>
         @endif

       </div>

       <div class="form-grup">

         {!! Form::label('position', 'Proposed Position') !!}
         {!! Form::text('position', null, ['class' => 'form-control', 'placeholder'=>'Proposed Position']) !!}

         @if ($errors->has('position'))
             <span>
                 <strong>{{ $errors->first('position') }}</strong>
             </span>
         @endif

       </div>

       <div class="form-grup">

         {!! Form::label('profession', 'Profession') !!}
         {!! Form::text('profession', null, ['class' => 'form-control', 'placeholder'=>'Profession']) !!}

         @if ($errors->has('profession'))
             <span>
                 <strong>{{ $errors->first('profession') }}</strong>
             </span>
         @endif

       </div>

       <div class="form-grup">

         {!! Form::label('date_of_birth', 'Date of Birth') !!}
         {!! Form::text('date_of_birth', null, ['class' => 'form-control', 'placeholder'=>'Date of Birth']) !!}

         @if ($errors->has('date_of_birth'))
             <span>
                 <strong>{{ $errors->first('date_of_birth') }}</strong>
             </span>
         @endif

       </div>

       <div class="form-grup">

         {!! Form::label('years', 'Years with Consultant/Entity') !!}
         {!! Form::text('years', null, ['class' => 'form-control', 'placeholder'=>'Years with Consultant/Entity']) !!}

         @if ($errors->has('years'))
             <span>
                 <strong>{{ $errors->first('years') }}</strong>
             </span>
         @endif

       </div>

       <div class="form-grup">

         {!! Form::label('membership', 'Membership of Professional Body') !!}
         {!! Form::text('membership', null, ['class' => 'form-control', 'placeholder'=>'Membership of Professional Body']) !!}

         @if ($errors->has('membership'))
             <span>
                 <strong>{{ $errors->first('membership') }}</strong>
             </span>
         @endif

       </div>

       <div class="form-grup">

         {!! Form::label('task', 'Detailed Tasks Assigned') !!}
         {!! Form::text('task', null, ['class' => 'form-control', 'placeholder'=>'Detailed Tasks Assigned']) !!}

         @if ($errors->has('task'))
             <span>
                 <strong>{{ $errors->first('task') }}</strong>
             </span>
         @endif

       </div>

       <div class="form-grup">

         {!! Form::label('qualifications', 'Key Qualifications') !!}
         {!! Form::text('qualifications', null, ['class' => 'form-control', 'placeholder'=>'Key Qualifications']) !!}

         @if ($errors->has('qualifications'))
             <span>
                 <strong>{{ $errors->first('qualifications') }}</strong>
             </span>
         @endif

       </div>

       <div class="form-grup">

         {!! Form::label('education', 'Education') !!}
         {!! Form::text('education', null, ['class' => 'form-control', 'placeholder'=>'Education']) !!}

         @if ($errors->has('education'))
             <span>
                 <strong>{{ $errors->first('education') }}</strong>
             </span>
         @endif

       </div>

     </div>



     <div class="admin-form-content-right">


       <div class="form-grup">

         {!! Form::label('emp_record', 'Employment Record') !!}
         {!! Form::text('emp_record', null, ['class' => 'form-control', 'placeholder'=>'Employment Record']) !!}

         @if ($errors->has('emp_record'))
             <span>
                 <strong>{{ $errors->first('emp_record') }}</strong>
             </span>
         @endif

       </div>

       <div class="form-grup">

         {!! Form::label('languages', 'Languages') !!}
         {!! Form::text('languages', null, ['class' => 'form-control', 'placeholder'=>'Languages']) !!}

         @if ($errors->has('languages'))
             <span>
                 <strong>{{ $errors->first('languages') }}</strong>
             </span>
         @endif

       </div>


       <div class="form-grup">

         {!! Form::label('certification', 'Certification') !!}
         {!! Form::text('certification', null, ['class' => 'form-control', 'placeholder'=>'Certification']) !!}

         @if ($errors->has('certification'))
             <span>
                 <strong>{{ $errors->first('certification') }}</strong>
             </span>
         @endif

       </div>

       <div class="form-grup">

         {!! Form::label('nationality', 'Nationality') !!}
         {!! Form::text('nationality', null, ['class' => 'form-control', 'placeholder'=>'Nationality']) !!}

         @if ($errors->has('nationality'))
             <span>
                 <strong>{{ $errors->first('nationality') }}</strong>
             </span>
         @endif

       </div>

       <div class="form-grup">

         <div class="admin-file-upload">
               <label>Photo </label>
               <div class="proProfilePicWrapper">
                   <div id="editProfileImageUploadId" class="profile-image-upload-dflt">
                       <!-- <i id="profile-edit-icon" class="fa fa-picture-o"></i> -->
                       <img id="profilePreview" class="proProfilePicImage" src="/images/{{$staff->photo}}"/>
                   </div>
               </div>
               <div id="profile-pic-edit-btn" class="fileUpload">
                   <span class="file-upload-label"> <i class="fa fa-upload" aria-hidden="true"></i>change</span>
                   <input type="file" id="profileImg" class="upload" name="photo"/>
               </div>
           </div>

       </div>




     </div>

     <div class="admin-form-content-bootom">
       <div class="form-group">

         {!! Form::submit('Edit Staff', ['class' => 'btn']) !!}

       </div>
     </div>

     {!! Form::close() !!}
   </div>
 </div>
</div>


@stop
