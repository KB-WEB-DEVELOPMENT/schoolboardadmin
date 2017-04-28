<p>
trans('mail/gradeadded.greeting') {{ $student->first_name }} {{ $student->last_name }},
</p>	
<p>
trans('mail/gradeadded.message')
</p>
<p>
trans('mail/gradeadded.ending')
</p>
<p>
Admin @ {{ env('APP_NAME') }}
</p>
