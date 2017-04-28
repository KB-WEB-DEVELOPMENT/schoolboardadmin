<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CourseController extends Controller   {

	public function index() {

		$courses = App\Course::all();
                  	   ->orderBy('title', 'asc')
                  	   ->paginate(15)
                           ->get();

		return view('front.courses.list', [ 'courses' => $courses ]);

	}

	public function search() {


		return view('front.course.search');

	}

	public function find(SearchCourseFormRequest $request) {

		$searched_course_title = $request->('title');
		$searched_course_number = (int)$request->('course_number');

		if ($searched_course_title && $searched_course_number) {

			   $courses_found = DB::table('course')
                                            ->where('title', 'LIKE', $searched_course_title)
                                            ->orWhere('course_number', 'LIKE',$searched_course_number)
                                            ->orderBy('title', 'asc')
                                            ->get();


		}	elseif ($searched_course_title) {

			   $courses_found = DB::table('course')
              				    ->where('title', 'LIKE', $searched_course_title)
              				    ->orderBy('title', 'asc')      
              				    ->get();
			}   

			return view('front.course.found', [ 'courses_found' => $courses_found ]);
	 }


	public function show(Request $request, $course_id) {

		$course_id = (int)$course_id;

		$course = App\Course::findOrFail($course_id);
               
		return view('front.course.show', [ 'course' => $course,]);
	}

	public function create() {


		return view('back.course.create');

	}

	public function submit(CreateCourseFormRequest $request) {

		$new_course = new App\Course();

		$new_course->title = $request->title;
		$new_course->course_number = $request->course_number;
		$new_course->description = $request->description;
		$new_course->availability = $request->availability;

		$new_course->save();

		return view('back.course.submit');

	}

	public function edit(Request $request, $course_id) {

		$course_id = (int)$course_id;

		$course = App\Course::findOrFail($course_id);

		return view('back.course.edit', [ 'course' => $course,]);

	}

	public function change(UpdateCourseFormRequest $request, $course_id) {

		$course_id = (int)$course_id;

		$updated_course = App\Course::findOrFail($course_id);		

		$updated_course->description = $request->description;
		$updated_course->availability = $request->availability;

		$updated_course->save();			

		return view('back.course.change');

	}


    
}
