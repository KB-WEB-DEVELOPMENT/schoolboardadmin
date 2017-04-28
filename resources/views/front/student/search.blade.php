	@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> trans('front/student/search.search_student_msg')  </div>

                <div class="panel-body">
                    <form action="{{ route('student.search.found') }}" method="post">
					
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    
							<label for="first_name" class="control-label"> trans('front/student/search.student_first_name_title') </label>
                            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ (old('first_name') ? old('first_name') : '' ) }}" placeholder=" ">
                            @if ($errors->has('first_name'))
                                <div class="help-block danger">
                                    {{ $errors->first('first_name') }}
                                </div>
                            @endif
                            <div class="help-block">
                                <p> trans('front/student/search.student_first_name_msg').</p>
                            </div>
                        </div>

						 <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    
							<label for="last_name" class="control-label"> trans('front/student/search.student_last_name_title') </label>
                            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ (old('last_name') ? old('last_name') : '' ) }}" placeholder=" ">
                            @if ($errors->has('last_name'))
                                <div class="help-block danger">
                                    {{ $errors->first('last_name') }}
                                </div>
                            @endif
                            <div class="help-block">
                                <p>trans('front/student/search.student_last_name_msg').</p>
                            </div>
                        </div>
												                  
						<br />
                        <br />
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-default pull-right"> trans('front/student/search.search_student_msg') </button>
                    
					</form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
