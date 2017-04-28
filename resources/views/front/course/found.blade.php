@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> trans('front/course/found.searched_course_results_title')  </div>

                <div class="panel-body">
					
					
					@if ($courses_found)
						
						<table style="width:100%">
						
							<tr>
								<th> trans('front/course/found.course_title') </th><th> trans('front/course/found.course_number_title') </th><th> trans('front/course/found.course_details_title') </th><th> trans('front/course/found.edit_course_title') </th>
							</tr>
						
							@foreach ($courses_found as $course)              
							
								<tr>
									<td>{{ $course->title }}</td>
									
									<td>{{ $course->course_number }}</td>
									
									<td>
										<a href="{{ route('course.details.view', [ 'course_id' => {{ $course->id }} ]) }}">
											trans('front/course/found.course_details_title')
										</a>
									</td>
									
									<td>
										@if (Auth::user()->role === 'admin')
											<a href="{{ route('course.details.edit', [ 'course_id' => {{ $course->id }} ]) }}">
												trans('front/course/found.edit_course_title')
											</a>
										@endif
									</td>
								</tr>
						  
							@endforeach
						
						</table>

						@else
						
						trans('front/course/found.course_search_no_result_msg').
						
					@endif 
                
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
