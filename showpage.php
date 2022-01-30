<?php
$connect=mysqli_connect('localhost','root','','mynotes');
$checkid=$_POST['checkid'];
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $selectQuery = "SELECT * FROM notestable where uniqueid='$checkid'";
    $result = mysqli_query($connect,$selectQuery);
    if(mysqli_num_rows($result) > 0){
    }else{
        $msg = "No Record found";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML and PHP code</title>
</head>
<body>
    <h1>Display user list using HTML and PHP</h1>
   
    <table border="1px" style="width:700px; line-height:40px;">
        <thead>
            <tr>
                <th>SerialNo</th>
                <th>Unique-Id</th>
                <th>Title</th>
                <th>User-Data</th>
                <th>Submitted-Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result))
                { ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['uniqueid']?></td>
                    <td><?php echo $row['tittle']; ?></td>
                    <td><?php echo $row['subject']; ?></td>
                    <td><?php  $string=$row['PostedOn'];
                    $new_string =  mb_strimwidth($string, 0, 11);
                     echo $new_string?></td>
                <tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</body>
</html>
