@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> trans('back/course.add_new_course_msg') </div>

                <div class="panel-body">
                    <form action="{{ route('course.create.submit') }}" method="post">
					
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    
			<label for="title" class="control-label"> trans('back/course.course_title') </label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ (old('title') ? old('title') : '' ) }}" placeholder= "">
                            @if ($errors->has('title'))
                                <div class="help-block danger">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                            <div class="help-block">
                                <p> trans('back/course.no_unique_course_title_msg') </p>
                            </div>
                        </div>
						
						
						<div class="form-group{{ $errors->has('course_number') ? ' has-error' : '' }}">                    
							<label for="course_number" class="control-label"> trans('back/course.unique_course_number_title') </label>
                            <input type="text" name="course_number" id="course_number" class="form-control" value="{{ (old('course_number') ? old('course_number') : '' ) }}" placeholder=" ">
                            @if ($errors->has('course_number'))
                                <div class="help-block danger">
                                    {{ $errors->first('course_number') }}
                                </div>
                            @endif
                            <div class="help-block">
                                <p> trans('back/course.unique_course_number_msg') </p>
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">                    
							<label for="description" class="control-label"> trans('back/course.course_description_title') </label>
                            <input type="textarea" rows="4" cols="50" name="description" id="description" class="form-control" value="{{ (old('description') ? old('description') : '' ) }}" placeholder="">
                            @if ($errors->has('description'))
                                <div class="help-block danger">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                            <div class="help-block">
                                <p> trans('back/course.course_description_msg') </p>
                            </div>
                        </div>
												
						<div class="form-group{{ $errors->has('availability') ? ' has-error' : '' }}">                    
							<label for="availability" class="control-label"> trans('back/course.course_availability_title') </label>
                            <input type="radio" name="availability" id="available" value="available"  class="form-control" >
                            <input type="radio" name="availability" id="unavailable" value="unavailable" class="form-control" >
							@if ($errors->has('availability'))
                                <div class="help-block danger">
                                    {{ $errors->first('availability') }}
                                </div>
                            @endif
                            <div class="help-block">
                                <p>  trans('back/course.course_available_msg') .</p>
                            </div>
                        </div>
												                  
						<br />
                        <br />
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-default pull-right"> trans('back/course.add_new_course_msg')  </button>
                    
					</form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
