<style>
*
{
 background-color:pink;

}

</style>





  <?php

    $con=mysqli_connect("localhost","root","","project");
    if(isset($_REQUEST['id']))
{
    $id=$_REQUEST['id'];
    $q="SELECT items FROM web where id=$id";
    }

    $res=$con->query($q);
    $row=mysqli_fetch_array($res);
    ?>

    <center>
    <form action="update.php" method="POST">
         <b><label>update items</label></b>
        <input type="text" name="items" value="<?php echo $row['items'];?>">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <br>
        <br>
 <button type="submit" name="submit" style=
 " background-color:black; color:white; font-size:15px;border-radius:5px; margin:5px; padding:5px; border:1px; width:100px; height:50px;">
update</button>
    </form>
    </center>

<?php
         if(isset($_REQUEST['id']))
{

        $con=mysqli_connect("localhost","root","","project");
        $id=$_REQUEST['id'];
        $items=$_REQUEST['items'];
        $q="UPDATE web set items=".$items." where id=$id";
        $res=$con->query($q);
        
       // header("location:jewellery website.html");   
    }
?>
<center>

<a href="jewellery website.html">
<button style="background-color:black; color:white; font-size:20px;border-radius:5px; margin:5px; padding:5px; border:1px; width:200px; height:50px;">
go back to home</button></a>

</center>