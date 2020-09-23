<!DOCTYPE html>
<html>
<head>
	<title>Employee-Details|Employee Management System</title>
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
  background-color: DodgerBlue;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
input[type=submit] {
  background-color: red;
  border: none;
  color: white;
  padding: 12px 30px;
  text-decoration: none;
  margin: 4px 7px;
  cursor: pointer;
}

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 20px;
}

#customers tr:nth-child(odd){background-color: blue;
color: white;
}

#customers tr:nth-child(even){background-color:gray;
color: white
}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
<ul>
  <img src="/images/Logo.JPG" width="100%" height="20%">
  <li><a class="active" href="{{route('admin.index')}}">Profile</a></li>
  <li><a href="{{route('admin.create_emp')}}">Create-Employee</a></li>
  <li><a href="{{route('admin.emp-list')}}">Employee-List</a></li>
  <li><a href="{{route('admin.complain')}}">Leave</a></li>
  <li><a href="{{route('admin.complain-list')}}">Leave-List</a></li>
  <li><a href="{{route('admin.budget')}}">Budget-Form</a></li>
  <li><a href="{{route('admin.budget_show')}}">Budget-List</a></li>
  <li><a href="{{route('logout.index')}}">Logout</a></li>
</ul>


     
<div style="margin-left:25%;padding:1px 10px;height:100px;">
    <div> <h1 align="center" style="color: blue;"><b><i>Employee Management System</i></b></h1>
    <h1 style="color: blue;">Welcome To {{ Session::get('uname')}}</h1>
</div><hr>
		<h1 align="center">Employee Details</h1>
   <!--  <div align="center"><img src="{{asset($acc->img)}}" alt="Picture"  class="w3-round-xlarge" style="width:50%" ></div> -->
	<table align="center" id="customers">
		<tr>
			<td>Employee Name:{{$acc['name']}}</td>
			
		</tr>
		<tr>
			<td>Email:{{$acc['email']}}</td>
			
		</tr>
		<tr>
			<td>Phone:{{$acc['phone']}}</td>
			
		</tr>
		<tr>
			<td>Job-Title:{{$acc['title']}}</td>
			
		</tr>
		<tr>
			<td>User-Name:{{$acc['uname']}}</td>
			
		</tr>
		
	</table>
</body>
</html>