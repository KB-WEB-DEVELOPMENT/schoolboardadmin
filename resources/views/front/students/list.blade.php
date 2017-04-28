@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> trans('front/students/list.list_students_title') </div>

                <div class="panel-body">
					
					@if($students->count())
						
						<table style="width:100%">
						
							<tr>
								<th>trans('front/students/list.first_name')</th>
								<th>trans('front/students/list.last_name')</th>
								<th>trans('front/students/list.view_profile_title')</th>
								<th>trans('front/students/list.edit_profile_title')</th>
								<th>trans('front/students/list.delete_profile_title')</th>
							</tr>
						
							@foreach ($students as $student)              
							
								<tr>
									<td>{{ $student->first_name }}</td>
									<td>{{ $student->last_name }}</td>
									<td><a href="{{ route('front.student.profile.view', [ 'student_id' => {{ $student->id }} ]) }}">
											trans('front/students/list.view_profile_msg')
										</a>
									</td>
									<td>
										@if (Auth::user()->role === 'admin')
											<a href="{{ route('back.student.profile.edit', [ 'student_id' => {{ $student->id }} ]) }}">
												trans('front/students/list.edit_profile_msg')
											</a>
								    	@endif
								    </td>
									<td>
										@if (Auth::user()->role === 'admin')
											<a href="{{ route('student.profile.delete', [ 'student_id' => {{ $student->id }} ]) }}">
												trans('front/students/list.delete_profile_msg')
											</a>
										@endif
									</td>
								</tr>
						  
							@endforeach

							{{ $students->links() }}
						
						</table>

						@else
						
						trans('front/students/list.no_reg_students_msg').
						
					@endif 
                
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
