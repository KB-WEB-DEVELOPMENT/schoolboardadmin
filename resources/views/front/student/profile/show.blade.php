@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> trans('front/student/profile/show.student_profile_title')  </div>

                <div class="panel-body">				
					<ul>	
						<li> trans('front/student/profile/show.first_name'): {{ $student->first_name }} </li>
						<li> trans('front/student/profile/show.last_name'): {{ $student->last_name }} </li>
						<li> trans('front/student/profile/show.email'): {{ $student->email }} </li> 
					</ul>
					
					
					@if($hasCourses)
					
						<table style="width:50%">
							<th> trans('front/student/profile/show.course_title') </th><th> trans('front/student/profile/show.grade_title') </th>

							@foreach ($courses_infos as $course)
							
								<tr>
									<td> {{ $course->title }} {{ $course->course_number }} </td><td> {{ $course->pivot->course_grade }} % </td>
								</tr>	
						
							@endforeach
						
						</table>

						<ul>	
							<li> trans('front/student/profile/show.avg_grade_title'): {{ $avg_grade }} %</li>
						</ul>
						
						@else

						trans('front/student/profile/show.student_no_course_msg').
						
					@endif 	
				</div>
            </div>
        </div>
    </div>
</div>
@endsection


