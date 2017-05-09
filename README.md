SchoolBoardAdmin -- Laravel 5-3 
-----------------------------------

SchoolBoardAdmin is an multilingual (English, French and German) application which allows registered users with their role set as "admin" to:

give grade to registered students (i.e: registered users with role set as "student")

modify the grades received by any student for a course taken

delete students 

add courses

modify courses details (course description, availability)

Non-registered users can:
---------------------------

view students details (courses taken with given grade + view overall average grade)

search students 

view courses details

search courses.

Registering (+ Login afterwards)

SchoolBoardAdmin is meant to give an example of how to combine

"Many-to-Many" relations within Laravel (MVC) models with a pivot table ("courses_students_table")

More infos on Laravel "Many-to-Many" relations: 

http://www.easylaravelbook.com/blog/2016/04/06/introducing-laravel-many-to-many-relations/

http://laraveldaily.com/pivot-tables-and-many-to-many-relationships/ 

 
Installation
------------------

type git clone https://github.com/KB-WEB-DEVELOPMENT/schoolboardadmin.git projectname to clone the repository

type cd projectname    

type composer install    

type composer update 

copy .env.example to .env 

type php artisan key:generateto regenerate secure key if you use MySQL in .env file :       

set DB_CONNECTION        

set DB_DATABASE

set DB_USERNAME

set DB_PASSWORD


Features
---------

For non-registered users:
--------------------------

Students listing

View any student details (courses taken, grades received 10%-100%, overall average grade)

Courses listing

Student search

Course search

Registering (+ Login afterwards)

For Admin:
-----------

Login

Add a new course grade (10%-100%) for any registered students

Modify course grades (10%-100%) received by any registered students

Modify course details (1.course description 2. select "avaible" or "unavailable")
 
(An automatic notification-email is sent to the student after he has received a new grade posted by an admin)

For Students:
--------------

Registering (+ Login afterwards)

(Receives an automatic notification-email after a new grade has been posted)

Configuration:
---------------

Make sure you configure these environment variables:

APP_URL : the url of the application. This variable is used for linking to the application in emails.

APP_NAME: the human readable name of the application. This variable is used for refering to the application via emails. It is also used in the navbar as the application branding.

MAIL_FROM_EMAIL and MAIL_FROM_NAME: the 'from' email address and name. This is used for sending out emails.

PUSHER_APP_ID, PUSHER_KEY and PUSHER_SECRET: the connection configuration for the pusher broadcast driver.

Further steps:
---------------

Set the QUEUE_DRIVER environment variable to database.

Set the APP_ENV environment variable to production when the app is on a live sever, to force HTTPS connections on all routes.

Run php artisan queue:work to allow jobs, queued mail and event broadcasting to function.
  
Additional Packages
----------------------

Carbon

Tuitionfees (my own !)

More infos on creating packages:  

http://laraveldaily.com/how-to-create-a-laravel-5-package-in-10-easy-steps/

https://devdojo.com/blog/tutorials/how-to-create-a-laravel-package 


Commands
---------

I created  one command to be used with this application:

A registered user with his/her role set as "admin" can directly delete/remove a registered user with his/her role set as 

"student" from the application.

To do so, execute : delete:student {user : The ID of the user}

Example: delete:student 1

For all details, please study the following file: SchoolBoardAdmin/app/Console/Commands/DeleteStudent.php as well as Laravel 

offical documentation on commands.

Tests
------

When you want to launch the tests first rollback the database :

php artisan migrate:rollback

Then migrate and seed :

php artisan migrate --seed

You can then use PHPUnit

