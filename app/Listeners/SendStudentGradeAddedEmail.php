<?php

namespace App\Listeners;

use Mail;
use App\User;

//use App\Events\PostReported;
//use App\Mail\PostReported as PostReportedEmail;

use App\Events\GradeAdded;
use App\Mail\GradeAdded as GradeAddedEmail;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendStudentGradeAddedEmail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  GradeAdded  $event
     * @return void
     */
    public function handle(GradeAdded $event)	{
		
		$student = $event->student;

		$student_id = $student->id;

		$student = User::where('id',$student_id)->get();
		
		Mail::to($student)->queue(new GradeAddedEmail($event->student));
			   
    }
}
