@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> trans('back/student/add_grade.add_grade_msg') </div>

				<div class="panel-body">

					@if count($students) 

						@if count($courses)

							<form action="{{ route('student.add_course_grade') }}" method="post" >

								<div class="form-group col-md-4{{ $errors->has('student') ? ' has-error' : '' }}">
								
									<label for="student" class="control-label"> trans('back/student/add_grade.select_student') </label>
										<select name="student" id="student" class="form-control">			
											@foreach ($students as $student)			
												<option value=" {{ $student->getKey() }} " >{{ student->first_name }} {{ student->last_name }}</option>			
											@endforeach
										</select>

									@if ($errors->has('student'))
										<div class="help-block danger">
											{{ $errors->first('student') }}
										</div>
									@endif

								</div>

								<div class="form-group col-md-4{{ $errors->has('course') ? ' has-error' : '' }}">

									<label for="course" class="control-label"> trans('back/student/add_grade.select_course') </label>
										<select name="course" id="course" class="form-control">
											@foreach ($courses as $course)			
												<option value=" {{ $course->getKey() }} " >{{ course->title }} {{ course->course_number }}</option>			
											@endforeach
										</select>

									@if ($errors->has('course'))
										<div class="help-block danger">
											{{ $errors->first('course') }}
										</div>
									@endif

								</div>

								<div class="form-group col-md-4{{ $errors->has('grade') ? ' has-error' : '' }}">

									<label for="grade" class="control-label"> trans('back/student/add_grade.select_grade') </label>
										<select name="grade" id="grade" class="form-control">
											  <option value="10" >10 %</option>
											  <option value="20">20 %</option>
											  <option value="30">30 %</option>
											  <option value="40">40 %</option>
											  <option value="50">50 %</option>
											  <option value="60">60 %</option>
											  <option value="70">70 %</option>
											  <option value="80">80 %</option>
											  <option value="90">90 %</option>
											  <option value="100">100 %</option>
										</select>

									@if ($errors->has('grade'))
										<div class="help-block danger">
											{{ $errors->first('grade') }}
										</div>
									@endif

								</div>

								<div class="col-md-2">
									{{ csrf_field() }}
									<button type="submit" class="btn btn-default pull-right"> trans('back/student/add_grade.submit') </button>
								</div>

							</form>

						@else	

							trans('back/student/add_grade.no_student_nor_course_msg').

						@endif	

					@endif
						
				</div>

			</div>
        </div>
    </div>
</div>
@endsection

