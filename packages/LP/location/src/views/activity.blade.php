<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
</head>
<body>
<br>

@foreach($activity as $act)


    user id : {{  $act->user_id  }} ||

    lattitude: {{  $act->lattitude }} || 

    longitude: {{  $act->longitude }}


    <br>

@endforeach


    
</body>
</html>