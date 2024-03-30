<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link href = "/bootstrap-3.4.1-dist/css/bootstrap.css" rel = "stylesheet">     -->
    <link href = "/css/dashboard.css" rel = "stylesheet">
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
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Image</th>
                <th>Status</th>
                <th id = "edit">Edit</th>
                <th id = "edit">Delete</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{ $student -> id }}</td>
                <td>{{ $student -> name }}</td>
                <td>{{ $student -> age }}</td>
                <td>{{ $student -> image }}</td>
                <td>{{ $student -> status }}</td>
                <td>
                    <a href="{{route('student.studentModify', ['student' => $student])}}" id = "edit">Edit</a>
                </td>
                <td>
                    <form method = "post" action="{{route('student.studentDelete', ['student' => $student])}}">
                        @csrf
                        @method("delete")
                        <input type="submit" value="Delete" id = delete>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    
    
    <!-- <script src = "/bootstrap-3.4.1-dist/js/bootsrap.js"></script> -->
</body>
</html>