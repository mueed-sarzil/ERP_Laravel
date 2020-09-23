<!DOCTYPE html>
<html>
<head>
	<title>Employee-Delete|DT IT</title>
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
body {
  background-color: lightblue;
}
</style>
</head>
<body>
<ul>
  <img src="/images/Logo.JPG" width="100%">
  <li><a class="active" href="{{route('admin.index')}}">My Profile</a></li>
  <li><a href="{{route('admin.create_emp')}}">Create-Employee</a></li>
  <li><a href="{{route('admin.emp-list')}}">Employee-List</a></li>
  <li><a href="{{route('admin.complain')}}">Complain</a></li>
  <li><a href="{{route('admin.complain-list')}}">Complain-List</a></li>
  <li><a href="{{route('logout.index')}}">Logout</a></li>
</ul>

     
<div style="margin-left:25%;padding:1px 10px;height:100px;">
    <div><h1 style="color: blue;" align="center">Dhaka Tribune IT</h1>
    <h3 style="color: blue;">Welcome To {{ Session::get('uname')}}</h3>
</div><hr>
		<h1 align="center">Employee Delete</h1>
	<table align="center">
		<tr>
			<td>Employee Name:{{$acc['name']}}</td>
			<td></td>
		</tr>
		<tr>
			<td>Email:{{$acc['email']}}</td>
			<td></td>
		</tr>
		<tr>
			<td>Phone:{{$acc['phone']}}</td>
			<td></td>
		</tr>
		<tr>
			<td>Job-Title:{{$acc['title']}}</td>
			<td></td>
		</tr>
		<tr>
			<td>User-Name:{{$acc['uname']}}</td>
			<td></td>
		</tr>
		
	</table>
	<div align="center">
	<h2>Are you sure?</h2>
	<form method="post">
		{{ csrf_field() }}
		<input type="hidden" name="accId" value="{{$acc['id']}}">
		<input type="submit" name="confirm" value="Confirm">
	</form>
</div>
</body>
</html>