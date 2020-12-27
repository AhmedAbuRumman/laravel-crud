<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <style>
       
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

#customers th{
    background-color:rgba(236, 48, 20, 0.9);
}
    </style>
</head>
<body>
<div class="container">
        <table class="table "id="customers" >
            <thead>
                <tr class="table-secondary">

                    <th scope="col">Image</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Edit</th>
					<th scope="col">Delete</th>

                </tr>
            </thead>
            <tbody>
            @foreach($all_students as $key => $value)
                <tr>
                <td><img src="images/students/{{$value['Student_Image']}}" width=200em; height=200em;></td>
    <td>{{$value['Email']}}</td>
    <td>{{$value['Mobile']}}</td>
    <td>{{$value['Full_Name']}}</td>
    
    <td><a href="editStudent/{{$value['id']}}"><button class="btn btn-primary">Edit</button></a></td>
    <td><a href="studentsTable/{{$value['id']}}"><button class="btn btn-danger">Delete</button></a></td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>



        <!--main end-->
    </div>
</body>
</html>