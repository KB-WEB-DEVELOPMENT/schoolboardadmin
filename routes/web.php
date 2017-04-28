<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    
    Route::get('/', 'HomeController@index')->name('app.home.index');

    // Language
    Route::get('language/{lang}', 'LanguageController')
    ->where('lang', implode('|', config('app.languages')));


    Auth::routes();

        
    Route::group(['prefix' => 'students', function () {

        Route::get('/list', 'StudentController@index')->name('students.list.view');
        Route::get('/search', 'StudentController@search')->name('student.search.view');
        Route::get('/search-student', 'StudentController@find')->name('student.search.found');
        Route::post('/add-course-grade', 'StudentController@add')->name('student.add_course_grade')->middleware('admin');
        Route::get('/add-course-grade-submitted-form', 'StudentController@addGrade')->name('student.added_course_grade')->middleware('admin');
        Route::get('/profile/{student_id}', 'StudentController@show')->where(['student_id' => '[1-9]+')->name('student.profile.view');
        Route::post('/profile/{student_id}/edit', 'StudentController@edit')->where(['student_id' => '[1-9]+')->name('student.profile.edit')->middleware('admin');
        Route::get('/edit-submitted-form', 'StudentController@change')->name('student.profile.change')->middleware('admin');
        Route::delete('/profile/{student_id}/delete', 'StudentController@destroy')->where(['student_id' => '[1-9]+')->name('student.profile.delete')->middleware('admin');
    }

        // make sure you write the policies
    Route::group(['prefix' => 'courses', , function () {    

        Route::get('/list', 'CourseController@index')->name('courses.list.view');
        Route::get('/search', 'CourseController@search')->name('course.search.view');
        Route::get('/search-course', 'CourseController@find')->name('course.search.found');
        Route::get('/{course_id}/details', 'CourseController@show')->where(['course_id' => '[1-9]+')->name('course.details.view');
        Route::post('/create',  'CourseController@create')->name('course.create')->middleware('admin');
        Route::get('/create-submitted-form',  'CourseController@submit')->name('course.create.submit')->middleware('admin');
        Route::post('/{course_id}/edit',   'CourseController@edit')->where(['{course_id}' => '[1-9]+')->name('course.details.edit')->middleware('admin');    
        Route::get('/edit-submitted-form',   'CourseController@change')->name('course.details.change')->middleware('admin');    

    }




