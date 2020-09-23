<!DOCTYPE html>
<html>

<head>
 
  <title>Budget_show|Dhaka Tribune It</title>
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

#customers tr:nth-child(even){background-color:#f2f2f2;

}

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
.button1 {
  background-color: blue;
  border: none;
  color: white;
  padding: 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
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
.button3 {
  background-color: green;
  border: none;
  color: white;
  padding: 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 6px 4px;
  cursor: pointer;
  border-radius: 12px;
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
    <li><a href="{{route('admin.budget')}}">Budget-Form</a></li>
      <li><a href="{{route('admin.budget_show')}}">Budget-List</a></li>
  <li><a href="{{route('logout.index')}}">Logout</a></li>
</ul>

     
<div style="margin-left:25%;padding:1px 10px;height:100px;">
    <div><h1 style="color: blue;" align="center">Dhaka Tribune IT</h1>
    <h1 style="color: blue;">Welcome To <a href="{{route('admin.index')}}">{{ Session::get('uname')}}</a></h1>
</div><hr>
<h1 align="center">Budget Details-<?php echo date("Y"); ?></h1>
    <div class="container">
  <table id="customers">
    <thead>
      <tr>
        <th>Expenditures</th>
        <th>Jan-<?php echo date("Y"); ?></th>
        <th>Feb-<?php echo date("Y"); ?></th>
        <th>Mar-<?php echo date("Y"); ?></th>
        <th>Apr-<?php echo date("Y"); ?></th>
        <th>May-<?php echo date("Y"); ?></th>
        <th>Jun-<?php echo date("Y"); ?></th>
        <th>July-<?php echo date("Y"); ?></th>
        <th>Aug-<?php echo date("Y"); ?></th>
        <th>Sep-<?php echo date("Y"); ?></th>
        <th>Oct-<?php echo date("Y"); ?></th>
        <th>Nov-<?php echo date("Y"); ?></th>
        <th>Dec-<?php echo date("Y"); ?></th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody> 
        @foreach($budgets as $acc)  
        <tr class="success">
        <td>{{$acc['expen']}}</td>
        <td>{{$acc['jan']}}</td>
        <td>{{$acc['feb']}}</td>
        <td>{{$acc['mar']}}</td>
        <td>{{$acc['apr']}}</td>
        <td>{{$acc['may']}}</td>
        <td>{{$acc['jun']}}</td>
        <td>{{$acc['july']}}</td>
        <td>{{$acc['aug']}}</td>
        <td>{{$acc['sep']}}</td>
        <td>{{$acc['oct']}}</td>
        <td>{{$acc['nov']}}</td>
          <td>{{$acc['decem']}}</td>
        <td>
         <a class="button1" href="{{route('admin.budget_edit', $acc['id'])}}">Edit</a>
         <a class="button2" href="{{route('admin.bdelete', $acc['id'])}}">Delete</a> 
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div align="center">
    <input type="submit" name="" class="button3" value="Export to Excel">
  </div>
</div>

</div>
</form>
</body>
</html>
