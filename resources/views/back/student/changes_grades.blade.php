@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> trans('back/student/changes_grades.edit_title') </div>

                <div class="panel-body">				
					<ul>	
						<li> trans('back/student/changes_grades.first_name'): {{ $student->first_name }} </li>
						<li> trans('back/student/changes_grades.last_name'): {{ $student->last_name }} </li>
						<li> trans('back/student/changes_grades.email'): {{ $student->email }} </li> 
					</ul>
										
					@if($hasCourses)
					
						<table style="width:75%">
							<th> trans('back/student/changes_grades.course_title') </th><th> trans('back/student/changes_grades.current_grade_title') </th><th> trans('back/student/changes_grades.new_grade_title') </th>

							@foreach ($courses_infos as $course)
							
								<tr>
									<td> {{ $course->title }} {{ $course->course_number }} </td>
									<td> {{ $course->pivot->course_grade }} % </td>
									<td>
										<form action="{{ route('student.profile.change') }}" method="post" >
									
											<div class="form-group col-md-4{{ $errors->has('grade') ? ' has-error' : '' }}">

													<select name="course_grade_changed-{{ $course->id }}" id="grade" class="form-control">
														<option value="10">10 %</option>
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
										
									</td>
								</tr>
								<tr>
									<td>
										<div class="col-md-2">
											{{ csrf_field() }}
										<button type="submit" class="btn btn-default pull-right"> trans('back/student/changes_grades.save_new_grade_title') </button>
										</div>
									</td>
									<td></td><td></td>
								</form>								
							@endforeach
						
						</table>
		
					@else

						trans('back/student/changes_grades.student_but_no_course_msg').
						
					@endif 	
				</div>
            </div>
        </div>
    </div>
</div>
@endsection


