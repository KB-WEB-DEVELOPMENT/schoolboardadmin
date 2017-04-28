@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> trans('front/course/search.search_course_msg') </div>

                <div class="panel-body">
                    <form action="{{ route('course.search.found') }}" method="post">
					
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    
							<label for="title" class="control-label"> trans('front/course/search.course_title')  </label>
                            <input type="text" name="title" id="course_title" class="form-control" value="{{ (old('title') ? old('title') : '' ) }}" placeholder=" ">
                            @if ($errors->has('title'))
                                <div class="help-block danger">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                            <div class="help-block">
                                <p> trans('front/course/search.course_title_error_msg')  </p>
                            </div>
                        </div>
						
						
						<div class="form-group{{ $errors->has('course_number') ? ' has-error' : '' }}">                    
							<label for="course_number" class="control-label"> trans('front/course/search.course_number_title') </label>
                            <input type="text" name="course_number" id="course_number" class="form-control" value="{{ (old('course_number') ? old('course_number') : '' ) }}" placeholder=" ">
                            @if ($errors->has('course_number'))
                                <div class="help-block danger">
                                    {{ $errors->first('course_number') }}
                                </div>
                            @endif
                            <div class="help-block">
                                <p> trans('front/course/search.course_number_unique_msg') </p>
                            </div>
                        </div>
																		                  
						<br />
                        <br />
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-default pull-right"> trans('front/course/search.search_course_msg') </button>
                    
					</form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
