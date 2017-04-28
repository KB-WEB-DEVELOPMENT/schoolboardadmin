<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddedGrade extends Mailable
{
    use Queueable, SerializesModels;

	public $student;
	
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $student)
    {
		
		$this->student = $student;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.gradeAdded', [ 'student' => $this->student, ]);
    }
}
