@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> trans('front/student/found.searched_student_results_title') </div>

                <div class="panel-body">
					
					@if($students_found)
						
						<table style="width:100%">
						
							<tr>
								<th> trans('front/student/found.first_name') </th>
								<th> trans('front/student/found.last_name') </th>
								<th> trans('front/student/found.view_profile_title') </th>
								<th> trans('front/student/found.edit_profile_title') </th>
								<th> trans('front/student/found.delete_title') </th>
							</tr>
						
							@foreach ($students_found as $student)              
							
								<tr>
									<td>{{ $student->first_name }}</td>
									<td>{{ $student->last_name }}</td>
									<td><a href="{{ route('student.profile.view', [ 'student_id' => {{ $student->id }} ]) }}">
											trans('front/student/found.view_profile_title')
										</a>
									</td>
									<td>
										@if (Auth::user()->role === 'admin')
											<a href="{{ route('student.profile.edit', [ 'student_id' => {{ $student->id }} ]) }}">
												trans('front/student/found.edit_profile_title')
											</a>
										@endif	
								    </td>
									<td>
										@if (Auth::user()->role === 'admin')
											<a href="{{ route('student.profile.delete', [ 'student_id' => {{ $student->id }} ]) }}">
												trans('front/student/found.delete_profile_title')
											</a>
										@endif	
									</td>
								</tr>
						  
							@endforeach
						
						</table>

						@else
						
						trans('front/student/found.student_search_no_result_msg').
						
					@endif 
                
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
