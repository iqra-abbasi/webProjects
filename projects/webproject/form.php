<html>

<head>

<style>
.loginBox{
    background-image: url("https://p1.pxfuel.com/preview/622/757/88/abstract-lights-black-background-royalty-free-thumbnail.jpg");
    margin:auto;
    height: 60%;
    width:60%;
    border: 3px solid black;
    background-size:cover;
}


form
{
color:black;
font-family:'Time New Roman';
font-size:30px;
}


button
{

background-color:aqua;
border-radius:5px;
margin:10px;
padding:10px;
text-align:center;
border: 1px;
width:200px;
height:50px;
font-size:20;
}


input{
    background-color:aquamarine;
    width: 90%;
    padding: 10px;
    margin-top: 10px;
    border:3px solid black;
    border-radius:10px;
}

</style>
</head>


<body >
    <form class="loginBox"  action="form.php"
method="POST">
    <center>
    <input  type="text" name="name" 
placeholder=" Please enter your name here"required>
    <br>

    <input type="text" name="email"
    placeholder="enter your email here"required>
    <br>

    <input type="text" name="phonenumber"
    placeholder="enter phone number here"required>
    <br>

    <input type="text" name="address"
    placeholder="enter your complete address here"required>
    <br>

    <input type="text" name="items"
    placeholder="enter the numbers of item here"required><br>
    <br>
  
    <button type="submit" name="submit" id="click" onclick="sign()" class="signup">
Submit</button>
 
    <br>

    </center>
</form>


<script>
function sign()
{

document.getElementById('click').value;
alert("Your order is successfully submitted");
}
</script>

</body>
</html>
<br>


<center>




<?php


$con=mysqli_connect("localhost","root","","project");




if(isset($_POST["submit"]))
{

$name=$_POST["name"];
$email=$_POST["email"];
$phonenumber=$_POST["phonenumber"];
$address=$_POST["address"];
$items=$_POST["items"];


$q="INSERT INTO web(name,email,phonenumber,address,items)
values('".$name."','".$email."','".$phonenumber."','".$address."','".$items."')";

$result=$con->query($q);



}


$q="SELECT * FROM web";
$result=mysqli_query($con,$q);

?>



<table border="2px">
<tr>

<th>id</th>

<th>name</th>

<th>email</th>

<th>phonenumber</th>

<th>address</th>

<th>items</th>

<th>delete</th>

<th>update</th>



</tr>



<?php


while($row=mysqli_fetch_array($result))
{
?>




<tr>

<td>
<?php
echo $row["id"];
?>
</td>

<td>
<?php
echo $row["name"];
?>
</td>

<td>
<?php
echo $row["email"];
?>
</td>

<td>
<?php
echo $row["phonenumber"];
?>
</td>

<td>
<?php
echo $row["address"];
?>
</td>

<td>
<?php
echo $row["items"];
?>
</td>






<td>

<a href="form.php?
id=
<?php
echo $row["id"];
?>">
delete
</a>
</td>





<td>
<a href="update.php?
id=
<?php
echo $row["id"];
?>">
update
</a>
</td>

</tr>

<?php
}
?>


</table>




<?php
if(isset($_POST["id"]))
{
$id=$_POST["id"];
echo $id;

$q="DELETE FROM web where
id=$id";

$result=mysqli_query($con,$q);
}
?>

</center>





 