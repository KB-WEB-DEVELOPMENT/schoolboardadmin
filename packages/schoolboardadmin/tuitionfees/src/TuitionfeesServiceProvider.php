	<?php

namespace SchoolBoardAdmin\Tuitionfees;

use Illuminate\Support\ServiceProvider;

class TuitionfeesServiceProvider extends ServiceProvider  {

	/**
	* some text
	*
	* @return void
	*/

	public function boot() {
	
		$this->loadViewsFrom(__DIR__.'/views', 'tuitionfees');
	}

	/**
	* some text
	*
	* @return void
	*/
	
	public function register()	{
	
        include __DIR__.'/routes.php';
		
        $this->app->make('schoolboardadmin\tuitionfees\TuitionfeesController');
    }
	
}
