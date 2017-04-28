<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class DeleteStudent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:student {user : The ID of the user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a given student within the application, assuming the student user id is known. Usage: delete:student 1';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // adapted from: https://github.com/zaknes/forum
        $student = User::find($this->argument('user'));

        if ($student->role ='admin') {
            die($this->error('Sorry, you cannot delete an administrator, only a student.'));
        }
		
		$student->courses()->detach();

		$student->delete();

        $this->info('Student ' . $student->first_name . ' ' $student->last_name . 'has been deleted from the application.');

    }
}
