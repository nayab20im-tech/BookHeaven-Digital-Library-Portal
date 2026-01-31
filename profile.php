<?php

echo"<link rel='stylesheet' type='text/css' href='style.css'>";

echo"<div class='div1'>
      	<ul>
      		<li class='li1'><a href='index.html'>Home</a></li>
      		<li class='li2'>Profile</li>
      	</ul>
      </div>";

$name = $_REQUEST['fname'];

$email = $_REQUEST['email'];

$age =$_REQUEST['age'];

$password =$_REQUEST['password'];

$number =$_REQUEST['number'];

echo"
     <div class='div3'>
     <table border=5px solid gray>
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Password</th>
            <th>Contact No</th>
            </tr>
            <tr>
            <td>$name</td>
            <td>$email</td>
            <td>$age</td>
            <td>$password</td>
            <td>$number</td>
            </tr>
     </table>
     <button class='B2'>OK</button>
     </div>
";








?>