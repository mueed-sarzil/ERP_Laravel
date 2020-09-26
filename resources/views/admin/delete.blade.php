<!DOCTYPE html>
<html>
<head>
	<title>Employee-Delete|EMS</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
body {
  background-color:lightgray;
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 10px 12px;
  font-size: 16px;
  cursor: pointer;
  margin: 2px 2px;
  cursor: pointer;
  border-radius: 10px
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: black;
  font-size: 18px;
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
    <div><h1 align="center" style="color: blue;"><b><i>Employee Management System</i></b></h1>
       <h3 style="color: blue;">Welcome To <a href="{{route('admin.index')}}">{{ Session::get('uname')}}</a></h3>
</div><hr>
		<h1 align="center">Employee-Delete</h1>
  <div class="card" align="center">
 
  <img src="{{asset($acc->img)}}" alt="Picture" style="width:60%">
  <h1>{{$acc['name']}}</h1>
  <p class="title"><i>{{$acc['title']}}</i></p>
  <p><i class="fa fa-send"></i>{{$acc['email']}}</p>
  <p><i class="fa fa-phone"></i>{{$acc['phone']}}</p>
</div>
	<div align="center">
	<h2>Are you sure?</h2>
	<form method="post">
		{{ csrf_field() }}
		<input type="hidden" name="accId" value="{{$acc['id']}}">
		<input type="submit" class="btn" name="confirm" value="Confirm">
	</form>
</div>
</body>
</html>