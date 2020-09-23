<!DOCTYPE html>
<html>

<head>
 
  <title>Employee|Employee Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color:#f2f2f2;

}

#customers tr:hover {background-color: black;
color: white;
}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: blue;
  color: white;
}
.button1 {
  background-color: blue;
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
.button2 {
  background-color: red;
  border: none;
  color: white;
  padding: 11px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
.btn {
  background-color: red;
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
  background-color: red;
}
.btn1 {
  background-color: lightblue;
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
.btn1:hover {
  background-color: lightblue;
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
     
<div style="margin-left:25%;padding:1px 10px;height:100px;">
    <div> <h1 align="center" style="color: blue;"><b><i>Employee Management System</i></b></h1>
    <h3 style="color: blue;">Welcome To <a href="{{route('admin.index')}}">{{ Session::get('uname')}}</a></h3>
</div><hr>
<h1 align="center">Employee-List</h1>
    <div class="container">
  <table id="customers" width="100%">
    <thead>
      <tr>
        <th>Action</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Job-Title</th>
        <th>Picture</th>
      </tr>
    </thead>
    <tbody> 
        @foreach($admins as $acc)  
        <tr class="success">
        <td width="10%">
          <a class="button1" href="{{route('admin.view', $acc['id'])}}" class="btn1"><i class="fa fa-folder"></i></a>
          <a class="button2" href="{{route('admin.delete', $acc['id'])}}" class="btn"><i class="fa fa-trash"></i></a>
        </td>
        <td width="10%">{{$acc['name']}}</td>
        <td width="15%">{{$acc['phone']}}</td>
        <td width="15%">{{$acc['title']}}</td>
        <td width="15%"> <img src="{{asset($acc->img)}}" alt="Picture"  class="w3-round-xlarge" style="width:50%" ></td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</div>
</form>
</body>
</html>
