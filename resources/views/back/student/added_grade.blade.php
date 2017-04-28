@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> trans('back/student/added_grade.title_msg')  </div>

                <div class="panel-body">

                    @if ($message = 1)

                        trans('back/student/added_grade.grade_added_msg').
					
                    @else

                        trans('back/student/added_grade.already_grade_for_course_msg').

                    @endif
				                
		</div>
            </div>
        </div>
    </div>
</div>
@endsection


