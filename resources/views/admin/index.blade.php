<!DOCTYPE html>
<html>
<head>
  <title>Admin|EMS</title>
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
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;

}

#customers td, #customers th {
  border: 1px solid gray;
  padding: 20px;
}
#customers tr:nth-child(odd){background-color: green;

color: white;
}

#customers tr:hover{background-color: gray;
color: white;
}


#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.button2 {
  background-color: blue;
  border: none;
  color: white;
  padding: 10px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
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
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 94%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 16px;
  color: black;
}

.button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body> 
<form> 
  {{@csrf_field()}}
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

     
<div style="margin-left:25%;padding:1px 16px;height:100px;">
     <div> <h1 align="center" style="color: blue;"><b><i>Employee Management System</i></b></h1>
       <h3 style="color: blue;">Welcome To <a href="{{route('admin.index')}}">{{ Session::get('uname')}}</a></h3>
     
</div><hr>
<h1 align="center" style="color: blue;">Profile</h1>
 <div class="card" align="center">
   @foreach($profiles as $acc)
  <img src="{{asset($acc->img)}}" alt="Picture" style="width:60%">
  <h3>{{$acc['name']}}</h3>
  <p class="title"><i>{{$acc['title']}}</i></p>
  <p><i class="fa fa-send"></i>{{$acc['email']}}</p>
  <p><i class="fa fa-phone"></i>{{$acc['phone']}}</p>
  @endforeach
  <p><a class="button" href="{{route('admin.edit', $acc['id'])}}"><i class="fa fa-edit"></i>Edit</a></p>

</div>
</div>
</form>
</body>
</html>
