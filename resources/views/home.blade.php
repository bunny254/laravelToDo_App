<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TO DO APP</title>
</head>
<body>
    <h1>MY TASKS</h1>
    <form method="post" action="{{route('saveTask')}}" accept-charset="UTF-8">
        @csrf

        <label for="task">Enter New Task</label>
        <input type="text" name="task">
        <button type="submit">SUBMIT</button>
    </form>
    
</body>
</html>