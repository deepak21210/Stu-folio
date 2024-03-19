<?php

include('../config.php');

if(isset($_GET['id'])){


$event_id=$_GET['id'];

$query="DELETE from events where id = $event_id;";

$result = mysqli_query($conn,$query);

if($result== True)
{
    header("location:edit.php");
}
else{
    echo "Failed".mysqli_error($conn);
}

}
?>