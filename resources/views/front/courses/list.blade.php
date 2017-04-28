@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> trans('front/courses/list.courses_title') </div>

                <div class="panel-body">
					
					@if($courses->count())
						
						<table style="width:100%">
						
							<tr>
								<th> trans('front/courses/list.course_title') </th><th> trans('front/courses/list.course_number_title') </th><th> trans('front/courses/list.course_details_title') </th><th> trans('front/courses/list.edit_course_title') </th>
							</tr>
						
							@foreach ($courses as $course)              
							
								<tr>
									<td>{{ $course->title }}</td>
									
									<td>{{ $course->course_number }}</td>
									
									<td>
										<a href="{{ route('course.details.view', [ 'course_id' => {{ $course->id }} ]) }}">
											trans('front/courses/list.course_details_title')
										</a>
									</td>
									
									<td>
										@if (Auth::user()->role === 'admin')
											<a href="{{ route('course.details.edit', [ 'course_id' => {{ $course->id }} ]) }}">
												trans('front/courses/list.edit_course_txt')
											</a>
										@endif
									</td>
												
								</tr>
						  
							@endforeach

							{{ $courses->links() }}
						
						</table>

						@else
						
						trans('front/courses/list.no_courses_available_msg').
						
					@endif 
                
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
