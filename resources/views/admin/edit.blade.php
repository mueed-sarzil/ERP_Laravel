<!DOCTYPE html>
<html>
<head>
  <title>Create|Dhaka Tribune</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
body {
  margin: 0;
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

body {
  background-color: lightgray;
}
.label-txt {
position: absolute;
top: -1.6em;
padding: 10}
form {
width: 60%;
margin: 60px auto;
background: #efefef;
padding: 60px 120px 80px 120px;
text-align: center;
-webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
}
label {
display: block;
position: relative;
margin: 40px 0px;
px;
font-family: sans-serif;
font-size: .8em;
letter-spacing: 1px;
color: rgb(120,120,120);
transition: ease .3s;
}
.input {
width: 100%;
padding: 10px;
background: transparent;
border: none;
outline: none;
}

.line-box {
position: relative;
width: 100%;
height: 2px;
background: #BCBCBC;
}

.line {
position: absolute;
width: 0%;
height: 2px;
top: 0px;
left: 50%;
transform: translateX(-50%);
background: #8BC34A;
transition: ease .6s;
}

.input:focus + .line-box .line {
width: 100%;
}

.label-active {
top: -3em;
}

button {
display: inline-block;
padding: 12px 24px;
background: rgb(220,220,220);
font-weight: bold;
color: rgb(120,120,120);
border: none;
outline: none;
border-radius: 3px;
cursor: pointer;
transition: ease .3s;
}

button:hover {
background: #8BC34A;
color: #ffffff;
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

     
<div style="margin-left:25%;padding:1px 16px;height:100px;">
    <div><h1 style="color: blue;" align="center">Dhaka Tribune IT</h1>
    <h3 style="color: blue;">Welcome To {{ Session::get('uname')}}</h3>
</div><hr>
<h1 align="center">Employee Edit</h1>
    <form method="post">
      {{@csrf_field()}}
  <label>
    <p class="label-txt">Enter Your Name</p>
    <input type="text" name="name" class="input" value="{{$acc['name']}}">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Enter Your Mail</p>
    <input type="text" name="email" class="input" value="{{$acc['email']}}">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Enter Your Phone</p>
    <input type="text" name="mobile" class="input" value="{{$acc['phone']}}">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Enter Your Job-Title</p>
    <input type="text" name="title" class="input" value="{{$acc['title']}}">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Enter Your UserName</p>
    <input type="text" name="uname" class="input" value="{{$acc['uname']}}">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Enter Your Password</p>
    <input type="text" name="password" class="input" value="{{$acc['password']}}">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit">submit</button><br/>
</form>
     

</div>

</body>
</html>
