<?php


$connect=mysqli_connect('localhost','root','','mynotes');
$uniqueid=$_POST['uniqueid'];
$tittle=$_POST['tittle'];
$subject=$_POST['subject'];
echo $uniqueid;
if (!empty($_POST['uniqueid']) and !empty($_POST['tittle'])  and !empty($_POST['subject']))

{

    $res=mysqli_query($connect,"select * from notestable");
    $count=mysqli_num_rows($res);
  
        $count=$count+1;
        $sql="INSERT INTO notestable (id,uniqueid,tittle,subject) VALUES ('$count','$uniqueid','$tittle','$subject') ";
        $connect->query($sql);
    
    
}
else {
 
    header( "refresh:0;url=https://rtcampphpproject.000webhostapp.com/newfolder/login.php" );    
echo '<script type="text/javascript">';
echo ' alert("Please Enter all details")';  //not showing an alert box.
echo '</script>';

}

?>