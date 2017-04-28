@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> trans('front/course/show.course_details_title') </div>

                <div class="panel-body">				
					<ul>	
						<li> trans('front/course/show.course_title_tile'): {{ $course->title }} </li>
						<li> trans('front/course/show.course_nummber_title'): {{ $course->course_number }} </li>
					</ul>
					<ul>	
						<li> trans('front/course/show.course_description_title'): </li>						
					</ul>
					<textarea rows="4" cols="50">
						{{ $course->description }}
					</textarea>
					<ul>	
						<li> trans('front/course/show.course_availability_title'): {{ $course->availability }}</li>
					</ul>

				</div>
            </div>
        </div>
    </div>
</div>
@endsection


					 
