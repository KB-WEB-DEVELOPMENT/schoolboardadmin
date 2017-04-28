@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> trans('back/course.edit_course_title'): {{ $course->title }} {{ $course->course_number }}</div>

                <div class="panel-body">				

				 <form action="{{ route('course.details.change') }}" method="post">
					
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    
							<label for="description" class="control-label"> trans('back/course.course_description_title') </label>
                            <input type="text" name="description" id="description" class="form-control" value="{{ (old('description') ? old('description') : '' ) }}" placeholder=" ">
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
                            <input type="radio" name="availability" id="availability" value="available"  class="form-control" >
                            <input type="radio" name="availability" id="availability" value="unavailable"class="form-control" >
							@if ($errors->has('availability'))
                                <div class="help-block danger">
                                    {{ $errors->first('availability') }}
                                </div>
                            @endif
                            <div class="help-block">
                                <p> trans('back/course.course_available_msg') .</p>
                            </div>
                        </div>
																		                  
						<br />
                        <br />
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-default pull-right"> trans('back/course.submit_changes_title') </button>                   
					</form>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection


					 
