<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <!-- <link href = "/bootstrap-3.4.1-dist/css/bootstrap.css" rel = "stylesheet">     -->
    <link href = "/css/studentModify.css" rel = "stylesheet">
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
        <form method = "post" action="{{route('student.studentUpdate', ['student' => $student])}}">
            @csrf
            @method("put")
            <div class = "field-u">
                <label for="name">Name</label>
                <input type="text" name="name" value = "{{$student->name}}">
            </div>
            <div class = "field-u">
                <label for="age">Age</label>
                <input type="text" name="age" value = "{{$student->age}}">
            </div>
            <div class = "field-u">
                <label for="image">Image</label>
                <input type="text" name="image" value = "{{$student->image}}">
            </div>
            <div class = "field-u">
                <label for="status">Status</label>
                <select name="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <div class = "field-u">
                <input type="submit" value = "Modify The Record" id = "signup">
            </div>
        </form>
    </div>
    
    
    <!-- <script src = "/bootstrap-3.4.1-dist/js/bootsrap.js"></script> -->
</body>
</html>