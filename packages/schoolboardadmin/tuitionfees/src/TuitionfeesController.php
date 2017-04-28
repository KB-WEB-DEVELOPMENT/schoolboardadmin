<?php

namespace SchoolBoardAdmin\Tuitionfees;
 
use Session;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
 
class TuitionfeesController extends Controller	{ 
    
	
	public function index()	{
     
		if (App::isLocale('en')) {
		
			$dt = Carbon::now();
		
			$dt->timezone = new DateTimeZone('America/New_York');
		
			$current_year_int =	$dt->year; 
			
			$current_month_int = $dt->month;
			
			$current_day_int = $dt->day;
			
			$total_days_in_current_month_int = $dt->daysInMonth;

			$days_remaining_int = $total_days_in_current_month_int - $current_day_int;
			
			$next_month_int = $current_month_int + 1;
			
			if ($current_month_int = 12) { 
			
				$next_year_int = $current_year_int + 1;  
				
				$proper_next_month_int = 1;
				
				$dt2 = Carbon::now()
				
				$dt2->setDate($next_year_int, $proper_next_month_int, 1);
		
				$formated_date_string = $dt2->toFormattedDateString();	// ex: Dec 25, 1975
				
				return view('tuitionfees::test', [ 'days_remaining_int' => $days_remaining_int, 'due_date' => $formated_date_string ]);
				
							
			} else {
			
					$proper_next_month_int = $current_month_int + 1;
					
					$dt2 = Carbon::now()
					
					$dt2->setDate($current_year_int, $proper_next_month_int, 1);
					
					$formated_date_string = $dt2->toFormattedDateString();
						
					return view('tuitionfees::test', [ 'days_remaining_int' => $days_remaining_int, 'due_date' => $formated_date_string ]);			
			}
			
		}	
		
		if (App::isLocale('fr')) {
		
			$dt = Carbon::now();
		
			$dt->timezone = new DateTimeZone('Africa/Dakar');
		
			$current_year_int =	$dt->year; 
			
			$current_month_int = $dt->month;
			
			$current_day_int = $dt->day;
			
			$total_days_in_current_month_int = $dt->daysInMonth;

			$days_remaining_int = $total_days_in_current_month_int - $current_day_int;
			
			$next_month_int = $current_month_int + 1;
			
			if ($current_month_int = 12) { 
			
				$next_year_int = $current_year_int + 1;  
				
				$proper_next_month_int = 1;
				
				$dt2 = Carbon::now()
				
				$dt2->setDate($next_year_int, $proper_next_month_int, 1);
		
				$formated_date_string = $dt2->toFormattedDateString();	// ex: Dec 25, 1975
				
				return view('tuitionfees::test', [ 'days_remaining_int' => $days_remaining_int, 'due_date' => $formated_date_string ]);
				
							
			} else {
			
					$proper_next_month_int = $current_month_int + 1;
					
					$dt2 = Carbon::now()
					
					$dt2->setDate($current_year_int, $proper_next_month_int, 1);
					
					$formated_date_string = $dt2->toFormattedDateString();
						
					return view('tuitionfees::test', [ 'days_remaining_int' => $days_remaining_int, 'due_date' => $formated_date_string ]);			
			}	
		
		}
				
		if (App::isLocale('de')) {
		
			$dt = Carbon::now();
		
			$dt->timezone = new DateTimeZone('Europe/Berlin');
		
			$current_year_int =	$dt->year; 
			
			$current_month_int = $dt->month;
			
			$current_day_int = $dt->day;
			
			$total_days_in_current_month_int = $dt->daysInMonth;

			$days_remaining_int = $total_days_in_current_month_int - $current_day_int;
			
			$next_month_int = $current_month_int + 1;
			
			if ($current_month_int = 12) { 
			
				$next_year_int = $current_year_int + 1;  
				
				$proper_next_month_int = 1;
				
				$dt2 = Carbon::now()
				
				$dt2->setDate($next_year_int, $proper_next_month_int, 1);
		
				$formated_date_string = $dt2->toFormattedDateString();	// ex: Dec 25, 1975
				
				return view('tuitionfees::test', [ 'days_remaining_int' => $days_remaining_int, 'due_date' => $formated_date_string ]);
				
							
			} else {
			
					$proper_next_month_int = $current_month_int + 1;
					
					$dt2 = Carbon::now()
					
					$dt2->setDate($current_year_int, $proper_next_month_int, 1);
					
					$formated_date_string = $dt2->toFormattedDateString();
						
					return view('tuitionfees::test', [ 'days_remaining_int' => $days_remaining_int, 'due_date' => $formated_date_string ]);			
			}			
		}	
    } 
}
