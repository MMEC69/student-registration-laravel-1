<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <!-- <link href = "/bootstrap-3.4.1-dist/css/bootstrap.css" rel = "stylesheet">     -->
    <link href = "/css/studentRegistration.css" rel = "stylesheet">
</head>
<body>
    <div class = "nav-bar">
        

        <div class = "item">
            <ul>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/studentRegister">Register Students</a></li>
                <li><a href="/studentView">View Students</a></li>
            </ul>
        </div>
    </div>
    
    <div class = "container">
        <form method = "post" action="{{ route('student.store') }}">
        @csrf 
        @method('post')    
        <div class = "field-u">
                <label for="name">Name</label>
                <input type="text" name="name">
            </div>
            <div class = "field-u">
                <label for="age">Age</label>
                <input type="number" name="age">
            </div>
            <div class = "field-u">
                <label for="image">Image</label>
                <input type="text" name="image">
            </div>
            <div class = "field-u">
                <label for="status">Status</label>
                <input type="text" name="status">
            </div>
            <div class = "field-u">
                <input type="submit" value = "Register Student" id = "signup">
            </div>
        </form>
    </div>
    
    
    <!-- <script src = "/bootstrap-3.4.1-dist/js/bootsrap.js"></script> -->
</body>
</html>