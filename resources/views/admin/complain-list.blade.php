<!DOCTYPE html>
<html>
<head>
  <title>Complain-list|DT IT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {
  margin: 0;
  background-color: lightgray;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: red;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
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

#customers tr:hover {background-color: black;
 color: white;
}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: red;
  color: white;
}
.input {
width: 80%;
padding: 10px;
background: white;
border: 10px;
outline: fixed;
}
</style>
</head>
<body> 
<form> 
  {{@csrf_field()}} 
<ul>
  <img src="/images/Logo.JPG" width="100%">
  <li><a class="active" href="{{route('admin.index')}}">My Profile</a></li>
  <li><a href="{{route('admin.create_emp')}}">Create-Employee</a></li>
  <li><a href="{{route('admin.emp-list')}}">Employee-List</a></li>
  <li><a href="{{route('admin.complain')}}">Complain</a></li>
  <li><a href="{{route('admin.complain-list')}}">Complain-List</a></li>
  <li><a href="{{route('logout.index')}}">Logout</a></li>
</ul>

     
<div style="margin-left:25%;padding:1px 16px;height:100px;">
    <div><h1 style="color: blue;" align="center">Dhaka Tribune IT</h1>
    <h1 style="color: blue;">Welcome To <a href="{{route('admin.index')}}">{{ Session::get('uname')}}</a></h1>
</div><hr>
<h1 align="center">Complain-list</h1>
    <div class="container"> 
  <input  id="myInput" class="input" type="text" placeholder="Search..">
  <br><br>
  <table class="table table-bordered table-striped" id="customers">
    <thead>
      <tr>
        <th>User name</th>
        <th>Problem</th>
        <th>Floor</th>
        <th>Department</th>
        <th>Employeer</th>
        <th>Issue-Date & Time</th>
        <th>Release-Date</th>
      </tr>
    </thead>
     @foreach($admins as $acc)  
    <tbody id="myTable">  
      <tr>
        <td>{{$acc['name']}}</td>
        <td>{{$acc['problem']}}</td>
        <td>{{$acc['floor']}}</td>
         <td>{{$acc['dept']}}</td>
          <td>{{$acc['ename']}}</td>
         <td>{{$acc['idate']}}</td> 
         <td>{{$acc['rdate']}}</td>
      </tr>  
    </tbody>
      @endforeach 
  </table>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</div>
</form>
</body>
</html>
