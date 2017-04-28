<!DOCTYPE html>
<html>
    <head>
        <title>SchoolBoardAdmin Laravel App - Tutionfees Package Sample Test</title>
 
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
 
        <style>
            html, body {
                height: 100%;
            }
 
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
 
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
 
            .content {
                text-align: center;
                display: inline-block;
            }
 
            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Package Testing</div>
                
                  trans('tuition/test.days_remaining_txt'): {{ $days_remaining_int }}
                  <br/>
                  trans('tuition/test.due_date_txt'): {{ $due_date }}
            </div>
        </div>
    </body>
</html>
