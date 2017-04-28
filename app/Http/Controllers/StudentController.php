<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class StudentController extends Controller 	{
  
  
	public function index() {

		$students = App\User::where('role', 'student')
                          ->orderBy('first_name', 'asc')
                          ->paginate(15)
                          ->get();

		return view('front.students.list', [ 'students' => $students ]);
	}

	public function search() {

		return view('front.student.search');

	}

	public function find(SearchStudentFormRequest $request) {

		$searched_student_first_name = $request->('first_name');
		$searched_student_last_name = $request->('last_name');

		if ($searched_student_first_name && $searched_student_last_name) {

			   $students_found = DB::table('user')
                           ->where('role','student')
                           ->where('first_name', 'LIKE', $searched_student_first_name)
                           ->orWhere('last_name', 'LIKE',$searched_student_last_name)
                           ->orderBy('first_name', 'asc')
                           ->get();

			  
		}	elseif ($searched_student_last_name) {

			    $students_found = DB::table('user')
                             ->where('role','student')
                             ->where('last_name', 'LIKE',$searched_student_last_name)
                             ->orderBy('last_name', 'asc')
                             ->get();
			}   

			return view('front.student.found', [ 'students_found' => $students_found ]);

	}

	public function add() {

		$students = App\User::all()->where('role', 'student')->orderBy('first_name', 'asc')->get();

		$courses = App\Course::all()->orderBy('title', 'asc')->get(); 

		return view('back.student.add_grade', [ 'students' => $students, 'courses' => $courses ]);

	}

	public function addGrade(AddCourseGradeFormRequest $request) {

		$student_id = (int)$request->('student');
		$course_id = (int)$request->('course');
		$grade = (int)$request->('grade');

		$match = DB::table('course_student')
				 ->where('student_id', '=', $student_id)
				 ->where('course_id', '=', $course_id)
				 ->get();

		if ($match) {

			$message = 0;
			//$message = "Sorry, the student has already received a grade for this course. ";
		
		} else {

			$student = App\User::findOrFail($student_id); // could select only users with role = "student"

			$student->courses()->attach($course_id, [ 'grade' => $grade ]);

			$student->save();

			$message = 1;
			//$message = "The student grade for this course was successfully added to the database.";	

			event(new GradeAdded($student));

			return response()->json(null, 200);

		}

		return view('back.student.added_grade', [ 'message' => $message ]);

	}
    
    public function show($student_id) {

    	$student_id = (int)$student_id;

    	$student = App\User::findOrFail($student_id);

        $hasCourses = DB::select('select * from course_student where student_id = :student_id', ['student_id' => $student_id ]);

        sum_grades = DB::table('course_student')
              		   ->sum('course_grade')				   
			               ->where('student_id', '=', $student_id)	   
			               ->get();

		$no_courses = DB::table('course_student')			  
			            ->select(DB::raw('count(*) as no_courses'))
			            ->where('student_id', '=', $student_id)
			            ->get();

		$avg_grade =  number_format($sum_grades / $no_courses, 2, ".", " ");	                    

    $courses_infos = $student->courses();

		return view('front.student.profile.show', [

			'student' => $student,
			'hasCourses' => $hasCourses,
			'courses_infos' => $courses_infos,
			'avg_grade' => $avg_grade,		    
		
		 ]  );
	}


	public function edit($student_id) {

		$student_id = (int)$student_id;

		$student = App\User::findOrFail($student_id); // could check that role = "student"

	  $hasCourses = DB::select('select * from course_student where student_id = :student_id', ['student_id' => $student_id ]);

		$courses_infos = $student->courses();


		return view('back.student.changes_grades', [

			'student' => $student,
			'hasCourses' => $hasCourses,
			'courses_infos' => $courses_infos,
		    		
		 ]  );

	}

	public function change(Request $request) {

		$student_id = $request->student_id;

		$student_id = (int)$student_id;

		$student = App\User::findOrFail($student_id); // could check that role = "student"

		$courses_infos = $student->courses();

			foreach ( $courses_infos as $course_info) {

				$course_id = $course_info->id;

				$new_grade = $request->('course_grade_changed-' . (string)$course_id .  "')";

				$student->courses()->updateExistingPivot($course_id, ['course_grade' => (int)$new_grade ]);
			
	  		$student->save();

			}		

		return view('back.student.grades_changed');

	}

	public function destroy($student_id) {

		$student_id = (int)$student_id;

		$student = App\User::findOrFail($student_id);

		$student->courses()->detach();

		$student->delete();

		return redirect()->route('app.home.index');

	}

}
